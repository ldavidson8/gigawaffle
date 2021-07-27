<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class WorkWithUsEmail extends Mailable
{
    use Queueable, SerializesModels;


    private $formData;
    

    public function __construct($formData)
    {
        $this -> formData = $formData;
    }


    public function build()
    {
        try
        {
            $formData = $this -> formData;
            $params = compact([ 'formData' ]);
            
            Log::channel('request-callback') -> info('WorkWithUsEmail -> build(), Sending Request to Work With Us Email');

            $view = $this -> subject('Gigawaffle - Request to work with us') -> view('_email.contact-forms.work-with-us', $params) -> text('_email.contact-forms.work-with-us-text', $params);
            return $view;
        }
        catch (Throwable $ex)
        {
            report($ex);
            Log::channel('request-callback') -> error('WorkWithUsEmail -> build(), Error Sending Request to Work With Us Email -:-  ' . $ex -> getMessage());
            abort(500);
        }
    }
}