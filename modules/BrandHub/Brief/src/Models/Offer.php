<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models;

use Ramsey\Uuid\UuidInterface;

final class Offer
{
    public UuidInterface $id;
    public string $title;
    public string $businessType;
    public string $price;
    public string $time;
    public string $includes;
    public ?string $ymGoalKey;

    public function __construct(UuidInterface $id, string $title, string $businessType, string $price, string $time, string $includes, ?string $ymGoalKey)
    {
        $this->id = $id;
        $this->title = $title;
        $this->businessType = $businessType;
        $this->price = $price;
        $this->time = $time;
        $this->includes = $includes;
        $this->ymGoalKey = $ymGoalKey;
    }
}
