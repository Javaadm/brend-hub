<?php

declare(strict_types=1);

namespace BrandHub\Analytic;

use BrandHub\Analytic\Contracts\YmGoalReadStorage;
use BrandHub\Analytic\Storage\Repositories\YmGoalStubRepository;

final class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(YmGoalReadStorage::class, YmGoalStubRepository::class);
    }
}
