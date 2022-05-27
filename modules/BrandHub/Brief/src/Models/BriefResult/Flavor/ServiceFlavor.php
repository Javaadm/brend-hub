<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult\Flavor;

final class ServiceFlavor
{
    public array $references;
    public string $emotionInFreeForm;
    public array $preferredDesigns;

    public function __construct(array $references, string $emotionInFreeForm, array $preferredDesigns)
    {
        $this->references = $references;
        $this->emotionInFreeForm = $emotionInFreeForm;
        $this->preferredDesigns = $preferredDesigns;
    }
}
