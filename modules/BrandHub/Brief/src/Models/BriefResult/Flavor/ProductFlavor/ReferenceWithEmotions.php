<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult\Flavor\ProductFlavor;

use BrandHub\Brief\Models\Emotion;
use BrandHub\Brief\Models\Reference;

final class ReferenceWithEmotions
{
    public Reference $reference;
    public array $emotions;

    /**
     * @param Emotion[] $emotions
     */
    public function __construct(
        Reference $reference,
        array $emotions
    ) {
        $this->reference = $reference;
        $this->emotions = $emotions;
    }
}
