<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class LeadMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
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
        return $this->from("brendhubtest@gmail.com")->subject("test")->view('emails.lead',
                                                                            [
                                                                                'name' => "test",
                                                                                'phone'=>"action",
                                                                                'mail'=>"historyPayments",
                                                                                'id'=>1
                                                                            ]);
//        return $this->markdown('emails.lead');
    }
}
