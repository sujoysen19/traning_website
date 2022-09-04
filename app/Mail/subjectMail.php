<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class subjectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectData;

    public function __construct($subjectData)
    {
        $this->subjectData = $subjectData;
    }


    public function build()
    {
        return $this->markdown('email.subjectMail')->with([
            'subjectData'=>$this->subjectData
        ]);
    }
}
