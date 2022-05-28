<?php

declare(strict_types=1);

namespace BrandHub\Brief\Storage\Repositories;

use BrandHub\Analytic\Contracts\YmGoalReadStorage;
use BrandHub\Brief\Contracts\OfferReadStorage;
use BrandHub\Brief\Models\Offer;
use BrandHub\Brief\Storage\Exceptions\OfferNotFound;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class OfferStubRepository implements OfferReadStorage
{
    private YmGoalReadStorage $ymGoalReadStorage;

    public function __construct(YmGoalReadStorage $ymGoalReadStorage)
    {
        $this->ymGoalReadStorage = $ymGoalReadStorage;
    }

    public function findByBusinessType(string $businessType): array
    {
        $offers = include __DIR__ . '/../InitialData/offers.php';

        $output = [];

        foreach ($offers as $offer) {
            if ($offer['business_type'] !== $businessType) {
                continue;
            }

            $output[] = new Offer(
                Uuid::fromString($offer['id']),
                $offer['title'],
                $businessType,
                $offer['price'],
                $offer['time'],
                $offer['includes'],
                $this->ymGoalReadStorage->getKeyOrNullByEntityId(Uuid::fromString($offer['id']))
            );
        }

        return $output;
    }

    /**
     * @throws OfferNotFound
     */
    public function get(UuidInterface $id): Offer
    {
        $offers = include __DIR__ . '/../InitialData/offers.php';

        foreach ($offers as $offer) {
            if ($offer['id'] === $id->toString()) {
                return new Offer(
                    $id,
                    $offer['title'],
                    $offer['business_type'],
                    $offer['price'],
                    $offer['time'],
                    $offer['includes'],
                    null
                );
            }
        }

        throw new OfferNotFound();
    }
}
