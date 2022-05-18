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

class LeadMail extends Mailable
{
    use Queueable, SerializesModels;

    private $isFillOut;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($isFillOut)
    {
        $this->isFillOut = $isFillOut;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $lead = new Leads();
        $lead->phone = session("phone");
        $lead->name = session("name");
        $lead->email = session("email");
        $lead->save();

        if($this->isFillOut){
            $html = view('pdf.invoice', [
                "dessArray"=>DateController::CONST_DESS_ARRAY,
                "emotionsValue"=>DateController::CONST_EMOTIONS_VALUE
            ])->render();

            $pdf = PDF::loadHTML($html);
            $id = $lead->id;
            Storage::disk('local')->put("leads/lead-$id.pdf",$pdf->output()) ;


            return $this->from("brendhubtest@gmail.com")->subject("Лид ID : $lead->id")->attachData($pdf->output(), "lead.pdf")->view('emails.lead',
                                                                                              [
                                                                                                  'name' => session("name"),
                                                                                                  'phone'=> session("phone"),
                                                                                                  'email'=> session("email"),
                                                                                                  'id'=> $lead->id
                                                                                              ]);
        }else{
            return $this->from("brendhubtest@gmail.com")->subject("Лид ID : $lead->id")->view('emails.lead',
                                                                                              [
                                                                                                  'name' => session("name"),
                                                                                                  'phone'=> session("phone"),
                                                                                                  'email'=> session("email"),
                                                                                                  'id'=> $lead->id
                                                                                              ]);
        }



    }
}
