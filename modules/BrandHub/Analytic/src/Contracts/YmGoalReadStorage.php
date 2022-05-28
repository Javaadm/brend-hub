<?php

declare(strict_types=1);

namespace BrandHub\Analytic\Contracts;

use Ramsey\Uuid\UuidInterface;

interface YmGoalReadStorage
{
    public function getKeyOrNullByEntityId(UuidInterface $entityId): ?string;
}
