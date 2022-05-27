<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models;

use Ramsey\Uuid\UuidInterface;

final class Emotion
{
    public UuidInterface $id;
    public string $name;

    public function __construct(UuidInterface $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
