<?php

declare(strict_types=1);

namespace BrandHub\Portfolio\Models;

use Ramsey\Uuid\UuidInterface;

final class ProjectReadModel
{
    public function __construct(
        public readonly UuidInterface $id,
        public readonly string $link,
        public readonly string $imagePath,
        public readonly ?string $ymGoalKey
    ) {}
}
