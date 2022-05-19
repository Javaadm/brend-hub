<?php

namespace App\Mail;

use App\Models\Leads;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Storage;

class BeatingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("brendhubtest@gmail.com")->subject("")->view('emails.beating');
    }
}
