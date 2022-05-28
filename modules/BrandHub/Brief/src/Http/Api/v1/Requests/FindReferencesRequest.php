<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class FindReferencesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'business_type' => 'required|in:product,service',
            'limit' => 'required',
            'offset' => 'required',
        ];
    }

    public function getBusinessType(): string
    {
        return $this->query->get('business_type');
    }

    public function getLimit(): int
    {
        return $this->query->getInt('limit');
    }

    public function getOffset(): int
    {
        return $this->query->getInt('offset');
    }
}
