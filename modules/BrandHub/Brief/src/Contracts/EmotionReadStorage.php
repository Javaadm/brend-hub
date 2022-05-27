<?php

declare(strict_types=1);

namespace BrandHub\Brief\Contracts;

use BrandHub\Brief\Models\Emotion;

interface EmotionReadStorage
{
    /**
     * @return Emotion[]
     */
    public function find(): array;

    /**
     * @return Emotion[]
     */
    public function findByIds(array $ids): array;
}
