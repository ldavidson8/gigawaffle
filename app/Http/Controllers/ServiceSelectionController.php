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
            $form_data = Request::all();
            $validator = Validator::make($form_data,
            [
                'fullname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'nullable|numeric',
                'message' => 'required|string',
                'services' => 'nullable|array'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            try
            {
                $sql_data =
                [
                    'full_name' => Request::input('fullname'),
                    'email_address' => Request::input('email'),
                    'phone_number' => Request::input('phone'),
                    'message' => Request::input('message'),
                    'services' => Request::input('services')
                ];
                $insertId = DB::table('service_request') -> insertGetId($sql_data);
            }
            catch (Throwable $th)
            {
                report($th);
            }

            Mail::to(env('MAIL_TO_ADDRESS')) -> queue(new ServiceSelectionEmail($form_data));

            return redirect() -> route('post.service-selection.success');
        }
        catch (Throwable $th)
        {
            throw($th);
            report($th);
            return redirect() -> route('post.service-selection.error');
        }
    }

    public function serviceSelectionSuccess()
    {
        $page_title = 'Success | Gigawaffle Service Request';
        return view('contact-forms.service-selection.success', compact('page_title'));
    }

    public function serviceSelectionError()
    {
        $page_title = 'Error | Gigawaffle Service Request';
        return view('contact-forms.service-selection.error', compact('page_title'));
    }
}
