<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $formData;
    private $ticket;

    public function __construct($formData, $ticket)
    {
        $this -> formData = $formData;
        $this -> ticket = $ticket;
    }

    public function build()
    {
        try
        {
            $formData = $this -> formData;
            $ticket = $this -> ticket;
            $params = compact([ 'formData', 'ticket' ]);

            Log::channel('contact-us-form') -> info('ContactUsEmail -> build(), Sending Request to Work With Us Email');

            $view = $this -> subject('Gigawaffle - Support Request') -> view('_email.contact-forms.contact-us', $params) -> text('_email.contact-forms.contact-us-text', $params);
            return $view;
        }
        catch (Throwable $ex)
        {
            report($ex);
            Log::channel('contact-us-form') -> error('ContactUsEmail -> build(), Error Sending Request to Work With Us Email -:-  ' . $ex -> getMessage());
            abort(500);
        }
    }
}
