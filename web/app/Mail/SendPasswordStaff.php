<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPasswordStaff extends Mailable
{
    use Queueable, SerializesModels;
    protected $nama;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$password)
    {
        //
        $this->nama=$nama;
        $this->password=$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject('Password Staff SIMonika')
                ->view('mails.sendpasswordstaff')
                ->with([
                    'nama'=>$this->nama,
                    'password'=>$this->password
                ]);
    }
}
