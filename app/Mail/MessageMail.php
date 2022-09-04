<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msgMail;

    public function __construct($msgMail)
    {
        $this->msgMail = $msgMail;
    }


    public function build()
    {
        return $this->markdown('email.messagecontactemail')->with([
            'msgMail' => $this->msgMail
        ]);
    }
}
