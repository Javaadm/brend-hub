<?php

declare(strict_types=1);

namespace BrandHub\Brief\Contracts;

use BrandHub\Brief\Models\Offer;
use BrandHub\Brief\Storage\Exceptions\OfferNotFound;
use Ramsey\Uuid\UuidInterface;

interface OfferReadStorage
{
    /**
     * @return Offer[]
     */
    public function findByBusinessType(string $businessType): array;

    /**
     * @throws OfferNotFound
     */
    public function get(UuidInterface $id): Offer;
}
