-------------------------------
--- Request To Work With Us ---
-------------------------------

Full Name:
    {{ $formData["fullname"] }}

Email Address:
    {{ $formData["email"] }}

Phone Number:
    {{ (isset($formData["phone"])) ? $formData["phone"] : 'N/A' }}

Message:
    {{ $formData["message"] }}