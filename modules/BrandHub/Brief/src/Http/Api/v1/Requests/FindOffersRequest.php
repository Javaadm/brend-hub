<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class FindOffersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'business_type' => 'required|in:product,service',
        ];
    }

    public function getBusinessType(): string
    {
        return $this->query->get('business_type');
    }
}
