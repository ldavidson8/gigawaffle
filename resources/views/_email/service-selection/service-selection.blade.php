@extends('_email.layouts.master')

@section('main-content')
    <h1>Gigawaffle - Pick and Mix Services Request</h1>
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
                <td><pre>{{ $formData["message"] }}</pre></td>
            </tr>
            @if (isset($formData["services"]))
                <tr>
                    <th>Services:</th>
                    <td>
                        <ul>
                            @foreach($formData["services"] as $services)
                                <li>{{ $services }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
