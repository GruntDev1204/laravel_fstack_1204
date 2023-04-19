<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class activePeople extends Mailable
{
    use Queueable, SerializesModels;

    public $ho_va_ten;
    public $hash;
    public $title;



    public function __construct($ho_va_ten,$hash,$title)
    {
        $this->ho_va_ten       = $ho_va_ten;
        $this->hash         = $hash;
        $this->title      = $title;
    }


    public function build()
    {
        return $this->subject($this->title)->view('mail.mail_allow_people', [
            'ho_ten' => $this->ho_va_ten,
            'hash'   => $this->hash,
        ]);
    }
}
