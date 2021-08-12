@extends('_email.layouts.master')

@section('main-content')
    <h1>Request To Work With Us</h1>
    <table>
        <tbody>
            <tr>
                <th>Full Name/Company Name</th>
                <td>{{ $formData["full_name"] }}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td>{{ $formData["email"] }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ (isset($formData["phone"])) ? $formData["phone"] : 'N/A' }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td><pre>{{ (isset($formData["message"])) ? $formData["message"] : 'N/A' }}</pre></td>
            </tr>
        </tbody>
    </table>
@endsection
