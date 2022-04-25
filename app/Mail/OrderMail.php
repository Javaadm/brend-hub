<?php

namespace App\Mail;

use App\Models\Leads;
use App\Models\Orders;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Storage;

class OrderMail extends Mailable
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

        $order = new Orders();
        $order->phone = session("phone");
        $order->name = session("name");
        $order->email = session("email");
        $order->save();

        $html = view('pdf.invoice', [
            "dessArray"=>DateController::CONST_DESS_ARRAY,//dessArray,
            "emotionsValue"=>DateController::CONST_EMOTIONS_VALUE
        ])->render();

        $pdf = PDF::loadHTML($html);
        $id = $order->id;
        Storage::disk('local')->put("orders/order-$id.pdf",$pdf->output()) ;

        return $this->from("brendhubtest@gmail.com")->subject("Заказ ID : $id")->attachData($pdf->output(), "order.pdf")->view('emails.order',
                                                                                                                                   [
                                                                                                                                       'name' => session("name"),
                                                                                                                                       'phone'=> session("phone"),
                                                                                                                                       'email'=> session("email"),
                                                                                                                                       'id'=> $id
                                                                                                                                   ]);
//        return $this->markdown('emails.lead');
    }
}
