<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models;

use Ramsey\Uuid\UuidInterface;

final class Advantage
{
    public UuidInterface $id;
    public string $title;
    public string $body;
    public string $iconPath;
    public ?string $ymGoalKey;

    public function __construct(UuidInterface $id, string $title, string $body, string $iconPath, ?string $ymGoalKey)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->iconPath = $iconPath;
        $this->ymGoalKey = $ymGoalKey;
    }
}
