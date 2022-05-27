<?php

declare(strict_types=1);

namespace BrandHub\Portfolio;

use BrandHub\Portfolio\Contracts\ProjectReadStorage;
use BrandHub\Portfolio\Storage\Repositories\ProjectStubRepository;

final class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProjectReadStorage::class, ProjectStubRepository::class);
    }
}
