<?php

declare(strict_types=1);

namespace BrandHub\Portfolio\Contracts;

interface ProjectReadStorage
{
    public function find(): array;
}
