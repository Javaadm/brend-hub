<?php

declare(strict_types=1);

namespace BrandHub\Brief;

use BrandHub\Brief\Contracts\AdvantageReadStorage;
use BrandHub\Brief\Contracts\EmotionReadStorage;
use BrandHub\Brief\Contracts\OfferReadStorage;
use BrandHub\Brief\Contracts\ReferenceReadStorage;
use BrandHub\Brief\Storage\Repositories\AdvantageStubRepository;
use BrandHub\Brief\Storage\Repositories\EmotionStubRepository;
use BrandHub\Brief\Storage\Repositories\OfferStubRepository;
use BrandHub\Brief\Storage\Repositories\ReferenceStubRepository;

final class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'brief');
    }

    public function register(): void
    {
        $this->app->bind(AdvantageReadStorage::class, AdvantageStubRepository::class);
        $this->app->bind(EmotionReadStorage::class, EmotionStubRepository::class);
        $this->app->bind(OfferReadStorage::class, OfferStubRepository::class);
        $this->app->bind(ReferenceReadStorage::class, ReferenceStubRepository::class);
    }
}
