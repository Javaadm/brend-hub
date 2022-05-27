<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult;

use App\Models\Orders;
use BrandHub\Brief\Mail\BriefSubmitted\BusinessNotificationMail;
use BrandHub\Brief\Mail\BriefSubmitted\CustomerNotificationMail;
use BrandHub\Brief\Models\Offer;
use BrandHub\Brief\Models\BriefResult\Flavor\ProductFlavor\ProductFlavor;
use BrandHub\Brief\Models\BriefResult\Flavor\ServiceFlavor;
use Barryvdh\DomPDF\Facade\Pdf as PDFGenerator;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\UuidInterface;

final class BriefResult
{
    private int $id;
    private Customer $customer;
    private Business $business;
    private ?ProductFlavor $productFlavor;
    private ?ServiceFlavor $serviceFlavor;
    private ?Offer $offer;

    public function __construct(Customer $customer, Business $business, ?ProductFlavor $productFlavor, ?ServiceFlavor $serviceFlavor, ?Offer $offer)
    {
        $order = new Orders();
        $order->phone = $customer->phone;
        $order->name = $customer->name;
        $order->email = $customer->email;
        $order->save();

        $this->id = $order->id;

        $this->customer = $customer;
        $this->business = $business;
        $this->productFlavor = $productFlavor;
        $this->serviceFlavor = $serviceFlavor;
        $this->offer = $offer;
    }

    private function toPDF(): PDF
    {
        $html = view(
            'brief::brief-result.html-for-convert-to-pdf',
            [
                'customer' => $this->customer,
                'business' => $this->business,
                'productFlavor' => $this->productFlavor,
                'serviceFlavor' => $this->serviceFlavor,
                'offer' => $this->offer,
            ]
        )->render();

        return PDFGenerator::loadHTML($html);
    }

    public function saveAsPDF(): void
    {
        Storage::disk('local')->put(
            sprintf('orders/order-%d.pdf', $this->id),
            $this->toPDF()->output()
        );
    }

    public function sendBriefToBusiness(): void
    {
        Mail::send(new BusinessNotificationMail($this->id, $this->customer, $this->toPDF()));
    }

    public function sendNotificationToCustomer(): void
    {
        Mail::send(new CustomerNotificationMail($this->customer));
    }
}
