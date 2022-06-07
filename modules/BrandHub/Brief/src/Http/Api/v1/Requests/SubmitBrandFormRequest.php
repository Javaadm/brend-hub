<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class SubmitBrandFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'business_type' => 'required|in:product,service',
            'selected_references_ids' => 'required|array',
            'business_activity' => 'required|string',
            'selected_advantages_ids' => 'required|array',
            'business_description' => 'string|nullable',
            'preferred_design_links' => 'array',
            'emotions_ids_for_product_references' => 'required_if:business_type,product|array',
            'text_emotions_for_service_references' => 'required_if:business_type,service|string|nullable',
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|email',
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

    public function getEmail(): string
    {
        return $this->request->get('email');
    }

    public function getTextEmotionsForServiceReferences(): string
    {
        return $this->request->get('text_emotions_for_service_references');
    }

    public function getBusinessActivity(): string
    {
        return $this->request->get('business_activity');
    }

    public function getBusinessDescription(): ?string
    {
        return $this->request->get('business_description');
    }

    /**
     * @return string[]
     */
    public function getSelectedReferencesIds(): array
    {
        return $this->request->get('selected_references_ids', []);
    }

    /**
     * @return string[]
     */
    public function getSelectedAdvantagesIds(): array
    {
        return $this->request->get('selected_advantages_ids', []);
    }

    public function getPreferredDesignsLinks(): array
    {
        return $this->request->get('preferred_design_links', []);
    }

    public function getEmotionsIdsForProductReferences(): array
    {
        return $this->request->get('emotions_ids_for_product_references', []);
    }

    public function getBusinessType(): string
    {
        return $this->request->get('business_type');
    }
}
