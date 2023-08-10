<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Halo, Saya mendapat informasi dari verdetwosales.com tertarik untuk melihat properti dari Verde Two. Saya ingin informasi lebih lanjut tentang properti yang tersedia. Terima kasih!';


    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send_email')
            ->subject($this->subject);
    }
}
