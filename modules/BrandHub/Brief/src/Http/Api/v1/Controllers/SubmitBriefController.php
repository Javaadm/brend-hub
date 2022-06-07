<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Controllers;

use App\Http\Controllers\Controller;
use BrandHub\Brief\Contracts\AdvantageReadStorage;
use BrandHub\Brief\Contracts\EmotionReadStorage;
use BrandHub\Brief\Contracts\OfferReadStorage;
use BrandHub\Brief\Contracts\ReferenceReadStorage;
use BrandHub\Brief\Models\BriefResult\BriefResult;
use BrandHub\Brief\Models\BriefResult\Business;
use BrandHub\Brief\Models\BriefResult\Customer;
use BrandHub\Brief\Http\Api\v1\Requests\SubmitBrandFormRequest;
use BrandHub\Brief\Models\BriefResult\Flavor\PreferredDesign;
use BrandHub\Brief\Models\BriefResult\Flavor\ProductFlavor\ProductFlavor;
use BrandHub\Brief\Models\BriefResult\Flavor\ServiceFlavor;
use BrandHub\Brief\Models\BriefResult\Flavor\ProductFlavor\ReferenceWithEmotions;
use Illuminate\Http\JsonResponse;
use Ramsey\Uuid\Uuid;

final class SubmitBriefController extends Controller
{
    private AdvantageReadStorage $advantageReadStorage;
    private OfferReadStorage $offerReadStorage;
    private ReferenceReadStorage $referenceReadStorage;
    private EmotionReadStorage $emotionReadStorage;

    public function __construct(
        AdvantageReadStorage $advantageReadStorage,
        OfferReadStorage $offerReadStorage,
        ReferenceReadStorage $referenceReadStorage,
        EmotionReadStorage $emotionReadStorage
    ) {
        $this->advantageReadStorage = $advantageReadStorage;
        $this->offerReadStorage = $offerReadStorage;
        $this->referenceReadStorage = $referenceReadStorage;
        $this->emotionReadStorage = $emotionReadStorage;
    }

    public function __invoke(SubmitBrandFormRequest $request)
    {
        $briefResult = new BriefResult(
            new Customer(
                $request->getName(),
                $request->getPhone(),
                $request->getEmail()
            ),
            new Business(
                $request->getBusinessType(),
                $request->getBusinessActivity(),
                $this->advantageReadStorage->findByIds($request->getSelectedAdvantagesIds()),
                $request->getBusinessDescription(),
            ),
            $request->getBusinessType() === 'product'
                ? new ProductFlavor(
                    $this->getReferencesWithEmotions($request->getEmotionsIdsForProductReferences()),
                    $this->getPreferredDesigns($request->getPreferredDesignsLinks())
                )
                : null,
            $request->getBusinessType() === 'service'
                ? new ServiceFlavor(
                    $this->referenceReadStorage->findByIds($request->getSelectedReferencesIds()),
                    $request->getTextEmotionsForServiceReferences(),
                    $this->getPreferredDesigns($request->getPreferredDesignsLinks())
                )
                : null
        );

        $briefResult->saveAsPDF();
        $briefResult->sendBriefToBusiness();
        $briefResult->sendNotificationToCustomer();

        return new JsonResponse(['status' => 'created'], JsonResponse::HTTP_CREATED);
    }

    /**
     * @return PreferredDesign[]
     */
    private function getPreferredDesigns(array $preferredDesignLinks): array
    {
        return array_map(
            fn ($designLink) => new PreferredDesign($designLink),
            $preferredDesignLinks
        );
    }

    /**
     * @return ReferenceWithEmotions[]
     */
    private function getReferencesWithEmotions(array $emotionsIdsForProductReferences): array
    {
        $referenceWithEmotions = [];

        foreach ($emotionsIdsForProductReferences as $referenceId => $emotionIds) {
            $referenceWithEmotions[] = new ReferenceWithEmotions(
                $this->referenceReadStorage->get(Uuid::fromString($referenceId)),
                $this->emotionReadStorage->findByIds($emotionIds)
            );
        }

        return $referenceWithEmotions;
    }
}
