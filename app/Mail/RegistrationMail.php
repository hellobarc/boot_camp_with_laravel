<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $registration_info;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($registration_info, $subject)
    {
        $this->registration_info = $registration_info;   
        $this->subject = $subject;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('email.user_registration');
    }
}
