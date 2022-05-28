<?php

declare(strict_types=1);

namespace BrandHub\Brief\Contracts;

use BrandHub\Brief\Models\Advantage;

interface AdvantageReadStorage
{
    /**
     * @return Advantage[]
     */
    public function find(): array;

    /**
     * @return Advantage[]
     */
    public function findByIds(array $ids): array;
}
