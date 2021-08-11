<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class ServiceSelectionEmail extends Mailable
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

            Log::channel('service-selection-form') -> info('ServiceSelectionEmail -> build(), Sending Request for Service Selection');

            $view = $this -> subject('Gigawaffle - Pick and Mix Request') -> view('_email.service-selection.service-selection', $params) -> text('_email.service-selection.service-selection-text', $params);
            return $view;
        }
        catch (Throwable $ex)
        {
            report($ex);
            Log::channel('service-selection-form') -> error('ServiceSelectionEmail -> build(), Error Sending Request for Service Selection -:-  ' . $ex -> getMessage());
            abort(500);
        }
    }
}
