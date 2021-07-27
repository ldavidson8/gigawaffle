<?php

namespace App\Http\Controllers;

use App\Mail\WorkWithUsEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function workWithUsPost()
    {
        $data = request() -> all();
        $validator = validator() -> make($data,
        [
            'fullname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'message' => 'nullable|string'
        ]);
        if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

        Mail::queue(new WorkWithUsEmail($data));

        return response() -> json($data);
    }
}