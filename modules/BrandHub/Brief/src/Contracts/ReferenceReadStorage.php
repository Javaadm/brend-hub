<?php

declare(strict_types=1);

namespace BrandHub\Brief\Contracts;

use BrandHub\Brief\Models\Reference;
use BrandHub\Brief\Storage\Exceptions\ReferenceNotFound;
use Ramsey\Uuid\UuidInterface;

interface ReferenceReadStorage
{
    /**
     * @return Reference[]
     */
    public function findByBusinessType(string $businessType, int $limit, int $offset): array;

    /**
     * @return Reference[]
     */
    public function findByIds(array $ids): array;

    /**
     * @throws ReferenceNotFound
     */
    public function get(UuidInterface $id): Reference;
}
