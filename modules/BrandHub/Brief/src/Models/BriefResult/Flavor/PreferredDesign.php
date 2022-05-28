<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult\Flavor;

final class PreferredDesign
{
    public string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }
}
