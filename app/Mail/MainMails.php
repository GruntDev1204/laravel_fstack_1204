<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MainMails extends Mailable
{
    use Queueable, SerializesModels;


    public $ho_ten;
    public $id;
    public $tieu_de;
    public function __construct($name,$id,$content)
    {
        $this->ho_ten       = $name;
        $this->hash         = $id;
        $this->tieu_de      = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->tieu_de)->view('mail.mailActionNoteUser', [
            'ho_ten' => $this->ho_ten,
            'hash'   => $this->hash,
        ]);
    }
}
