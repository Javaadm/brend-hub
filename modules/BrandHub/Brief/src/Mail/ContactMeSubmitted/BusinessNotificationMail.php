<?php

declare(strict_types=1);

namespace BrandHub\Brief\Mail\ContactMeSubmitted;

use App\Models\Leads;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class BusinessNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $phone;

    public function __construct(string $name, string $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function build(): self
    {
        $lead = new Leads();
        $lead->phone = $this->phone;
        $lead->name = $this->name;
        $lead->save();

        return $this->from(config('mail.from.address'))
            ->to(config('mail.business.address'))
            ->subject("Лид ID : $lead->id")
            ->view(
                'brief::mail.contact-me-submitted.business-notification',
                [
                    'name' => $this->name,
                    'phone' => $this->phone,
                ]
            );
    }
}
