<?php

declare(strict_types=1);

namespace BrandHub\Brief\Mail\BriefSubmitted;

use BrandHub\Brief\Models\BriefResult\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\PDF;

final class BusinessNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private int $id;
    private Customer $customer;
    private PDF $briefResultAsPDF;

    public function __construct(int $id, Customer $customer, PDF $briefResultAsPDF)
    {
        $this->id = $id;
        $this->customer = $customer;
        $this->briefResultAsPDF = $briefResultAsPDF;
    }

    public function build(): self
    {
        return $this->from(config('mail.from.address'))
            ->to(config('mail.business.address'))
            ->subject("Заказ ID : $this->id")
            ->attachData($this->briefResultAsPDF->output(), 'brief-result.pdf')
            ->view(
                'brief::mail.brief-submitted.business-notification',
                [
                    'customer' => $this->customer,
                ]
            );
    }
}
