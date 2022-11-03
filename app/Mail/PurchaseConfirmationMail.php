<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $fetch_order;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fetch_order, $subject)
    {
        $this->fetch_order = $fetch_order;   
        $this->subject = $subject;  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('email.purchase_confirmation');
    }
}
