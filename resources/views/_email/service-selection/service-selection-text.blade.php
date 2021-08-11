-------------------------------
--- Gigawaffle - Pick and Mix Services Request ---
-------------------------------

Full Name:
    {{ $formData["fullname"] }}

Email Address:
    {{ $formData["email"] }}

Phone Number:
    {{ (isset($formData["phone"])) ? $formData["phone"] : 'N/A' }}

Message:
    {{ $formData["message"] }}

@if (isset($formData["services"]))
Services:
    @foreach($formData["services"] as $services)
    {{ $services }}
    @endforeach
@endif