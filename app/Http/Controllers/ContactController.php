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
            $data = Request::all();
            $validator = Validator::make($data,
            [
                'fullname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'nullable|numeric',
                'message' => 'nullable|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();
            
            $ticket = date("dHis");
            try
            {
                $data =
                [
                    'full_name' => Request::input('fullname'),
                    'email_address' => Request::input('email'),
                    'phone_number' => Request::input('phone'),
                    'message' => Request::input('message')
                ];
                $insertId = DB::table('contact_us') -> insertGetId($data);
                $ticket = $insertId;
            }
            catch (Throwable $th)
            {
                report($th);
            }
            
            Mail::to(env('MAIL_TO_ADDRESS')) -> queue(new WorkWithUsEmail($data, $ticket));
            
            return redirect() -> route('post.work-with-us.success', [ 'token' => $ticket ]);
        }
        catch (Throwable $th)
        {
            throw($th);
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
            $data = Request::all();
            $validator = Validator::make($data,
            [
                'fullname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'nullable|numeric',
                'message' => 'required|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            Mail::to(env('MAIL_TO_ADDRESS')) -> queue(new ContactUsEmail($data));

            return redirect() -> route('post.contact-us.success');
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> route('post.contact-us.error');
        }
    }

    public function contactUsSuccess()
    {
        $page_title = 'Contact Us Success';
        return view('contact-forms.contact-us.success', compact('page_title'));
    }

    public function contactUsError()
    {
        $page_title = 'Contact Us Error';
        return view('contact-forms.contact-us.error', compact('page_title'));
    }
}