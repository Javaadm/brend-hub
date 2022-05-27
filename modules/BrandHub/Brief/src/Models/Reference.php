<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models;

use Ramsey\Uuid\UuidInterface;

final class Reference
{
    public UuidInterface $id;
    public string $businessType;
    public string $imagePath;
    public ?string $ymGoalKey;

    public function __construct(UuidInterface $id, string $businessType, string $imagePath, ?string $ymGoalKey)
    {
        $this->id = $id;
        $this->businessType = $businessType;
        $this->imagePath = $imagePath;
        $this->ymGoalKey = $ymGoalKey;
    }
}
