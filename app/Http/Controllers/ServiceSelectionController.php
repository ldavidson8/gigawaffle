<?php

namespace App\Http\Controllers;

use App\Mail\ServiceSelectionEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ServiceSelectionController extends Controller
{
    public function serviceSelectionPost()
    {
        try
        {
            // form validation
            $form_data = Request::all();
            $validator = Validator::make($form_data,
            [
                'full_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'nullable|numeric',
                'message' => 'required|string',
                'services' => 'nullable|array'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // save the form data to the database
            $ticket = date("dis");
            try
            {
                $sql_data =
                [
                    Request::input('full_name'),
                    Request::input('email'),
                    (Request::has('phone')) ? Request::input('phone') : "",
                    Request::input('message'),
                    (Request::has('services')) ? implode(",", Request::input('services')) : ""
                ];
                $rows = DB::select("call INSERT_service_request(?, ?, ?, ?, ?);", $sql_data);
                if (count($rows) > 0)
                {
                    $ticket = $rows[0] -> last_insert_id;
                }
            }
            catch (Throwable $th)
            {
                report($th);
            }
            $ticket = "PAM" . $ticket;

            // send an email to our support email address
            Mail::to(env('MAIL_TO_ADDRESS')) -> queue(new ServiceSelectionEmail($form_data), $ticket);

            // redirect to the success page
            return redirect() -> route('post.service-selection.success', [ "ticket" => $ticket ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> route('post.service-selection.error');
        }
    }

    public function serviceSelectionSuccess($ticket)
    {
        $page_title = 'Success | Gigawaffle Service Request';
        return view('contact-forms.service-selection.success', compact('page_title', 'ticket'));
    }

    public function serviceSelectionError()
    {
        $page_title = 'Error | Gigawaffle Service Request';
        return view('contact-forms.service-selection.error', compact('page_title'));
    }
}
