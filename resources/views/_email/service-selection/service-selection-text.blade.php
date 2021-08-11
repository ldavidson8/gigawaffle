-------------------------------
--- Gigawaffle - Pick and Mix Request ---
-------------------------------

Full Name:
    {{ $formData["fullname"] }}

Email Address:
    {{ $formData["email"] }}

Phone Number:
    {{ (isset($formData["phone"])) ? $formData["phone"] : 'N/A' }}

Message:
    {{ $formData["message"] }}

@if (isset($services))
Services:
    @foreach($formData["services"] as $services)
    {{ $services }}
    @endforeach
@endif