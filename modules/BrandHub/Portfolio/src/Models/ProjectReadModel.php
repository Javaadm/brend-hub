<?php

declare(strict_types=1);

namespace BrandHub\Portfolio\Models;

use Ramsey\Uuid\UuidInterface;

final class ProjectReadModel
{
    public UuidInterface $id;
    public string $link;
    public string $imagePath;
    public ?string $ymGoalKey;

    public function __construct(UuidInterface $id, string $link, string $imagePath, ?string $ymGoalKey)
    {
        $this->id = $id;
        $this->link = $link;
        $this->imagePath = $imagePath;
        $this->ymGoalKey = $ymGoalKey;
    }
}
