<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Controllers;

use App\Http\Controllers\Controller;
use BrandHub\Brief\Contracts\ReferenceReadStorage;
use BrandHub\Brief\Http\Api\v1\Requests\FindReferencesRequest;
use Illuminate\Http\JsonResponse;

final class FindReferencesController extends Controller
{
    private ReferenceReadStorage $referenceReadStorage;

    public function __construct(ReferenceReadStorage $referenceReadStorage)
    {
        $this->referenceReadStorage = $referenceReadStorage;
    }

    public function __invoke(FindReferencesRequest $request): JsonResponse
    {
        return new JsonResponse([
            'references' => $this->referenceReadStorage->findByBusinessType(
                $request->getBusinessType(),
                $request->getLimit(),
                $request->getOffset()
            ),
        ]);
    }
}
