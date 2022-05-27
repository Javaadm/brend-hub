<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class SubmitContactMeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|numeric'
        ];
    }

    public function getName(): string
    {
        return $this->request->get('name');
    }

    public function getPhone(): string
    {
        return $this->request->get('phone');
    }
}
