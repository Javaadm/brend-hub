<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult;

final class Business
{
    public string $type;
    public string $activity;
    public array $advantages;
    public ?string $description;

    public function __construct(string $type, string $activity, array $advantages, ?string $description)
    {
        $this->type = $type;
        $this->activity = $activity;
        $this->advantages = $advantages;
        $this->description = $description;
    }
}
