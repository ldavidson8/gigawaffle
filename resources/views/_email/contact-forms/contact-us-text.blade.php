-------------------------------
--- Request To Work With Us ---
-------------------------------

Support Ticket: {{ $ticket }}

Full Name:
    {{ $formData["full_name"] }}

Email Address:
    {{ $formData["email"] }}

Phone Number:
    {{ (isset($formData["phone"])) ? $formData["phone"] : 'N/A' }}

Message:
    {{ $formData["message"] }}
