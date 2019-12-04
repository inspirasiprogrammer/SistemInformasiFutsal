<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPasswordAkun extends Mailable
{
    use Queueable, SerializesModels;

    protected $nama;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$password)
    {
        //
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject("Password Akun Futsal")
                ->view('mails.sendpasswordakun')
                ->with([
                    "name" => $this->name,
                    "password" =>$this->password
                ]);
    }
}
