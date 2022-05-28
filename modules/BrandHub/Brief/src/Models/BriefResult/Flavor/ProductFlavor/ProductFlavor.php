<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult\Flavor\ProductFlavor;

final class ProductFlavor
{
    public array $referencesWithEmotions;
    public array $preferredDesigns;

    public function __construct(array $referencesWithEmotions, array $preferredDesigns)
    {
        $this->referencesWithEmotions = $referencesWithEmotions;
        $this->preferredDesigns = $preferredDesigns;
    }
}
