<?php

declare(strict_types=1);

namespace BrandHub\Brief\Mail\BriefSubmitted;

use BrandHub\Brief\Models\BriefResult\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class CustomerNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private Customer $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function build(): self
    {
        return $this->from(config('mail.from.address'))
            ->to($this->customer->email)
            ->subject('На пути к созданию сильного бренда!')
            ->view('brief::mail.brief-submitted.customer-notification');
    }
}
