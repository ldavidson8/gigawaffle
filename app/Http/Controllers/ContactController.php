<?php

namespace App\Http\Controllers;

use App\Mail\WorkWithUsEmail;
use App\Mail\ContactUsEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ContactController extends Controller
{
    public function workWithUsPost()
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
                'message' => 'nullable|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // save the form data to the database
            try
            {
                $sql_data =
                [
                    Request::input('full_name'),
                    Request::input('email'),
                    Request::input('phone'),
                    Request::input('message')
                ];
                DB::select("call INSERT_work_with_us(?, ?, ?, ?);", $sql_data);
            }
            catch (Throwable $th)
            {
                report($th);
            }

            // send an email to our support email address
            Mail::to(env('MAIL_TO_ADDRESS')) -> queue(new WorkWithUsEmail($form_data));

            // redirect to the success page
            return redirect() -> route('post.work-with-us.success');
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> route('post.work-with-us.error');
        }
    }

    public function workWithUsSuccess()
    {
        $page_title = 'Contact Us Success';
        return view('contact-forms.work-with-us.success', compact('page_title'));
    }

    public function workWithUsError()
    {
        $page_title = 'Contact Us Error';
        return view('contact-forms.work-with-us.error', compact('page_title'));
    }


    public function contactUsPost()
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
                'message' => 'required|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // save the form data to the database
            $ticket = date("dHis");
            try
            {
                $sql_data =
                [
                    Request::input('full_name'),
                    Request::input('email'),
                    Request::input('phone'),
                    Request::input('message')
                ];
                $rows = DB::select("call INSERT_contact_us(?, ?, ?, ?);", $sql_data);
                if (count($rows) > 0)
                {
                    $ticket = $rows[0] -> last_insert_id;
                }
            }
            catch (Throwable $th)
            {
                report($th);
            }
            $ticket = "C" . $ticket;

            // send an email to our support email address
            Mail::to(env('MAIL_TO_ADDRESS')) -> queue(new ContactUsEmail($form_data, $ticket));

            // redirect to the success page
            return redirect() -> route('post.contact-us.success', [ "ticket" => $ticket ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> route('post.contact-us.error');
        }
    }

    public function contactUsSuccess($ticket)
    {
        $page_title = 'Contact Us Success';
        return view('contact-forms.contact-us.success', compact('page_title', 'ticket'));
    }

    public function contactUsError()
    {
        $page_title = 'Contact Us Error';
        return view('contact-forms.contact-us.error', compact('page_title'));
    }
}
