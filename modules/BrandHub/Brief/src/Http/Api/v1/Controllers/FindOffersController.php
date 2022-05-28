<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Controllers;

use App\Http\Controllers\Controller;
use BrandHub\Brief\Contracts\OfferReadStorage;
use BrandHub\Brief\Http\Api\v1\Requests\FindOffersRequest;
use Illuminate\Http\JsonResponse;

final class FindOffersController extends Controller
{
    private OfferReadStorage $offerReadStorage;

    public function __construct(OfferReadStorage $offerReadStorage)
    {
        $this->offerReadStorage = $offerReadStorage;
    }

    public function __invoke(FindOffersRequest $request): JsonResponse
    {
        return new JsonResponse([
            'offers' => $this->offerReadStorage->findByBusinessType($request->getBusinessType()),
        ]);
    }
}
