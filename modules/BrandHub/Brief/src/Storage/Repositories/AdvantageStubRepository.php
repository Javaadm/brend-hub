<?php

declare(strict_types=1);

namespace BrandHub\Brief\Storage\Repositories;

use BrandHub\Analytic\Contracts\YmGoalReadStorage;
use BrandHub\Brief\Contracts\AdvantageReadStorage;
use BrandHub\Brief\Models\Advantage;
use Ramsey\Uuid\Uuid;

final class AdvantageStubRepository implements AdvantageReadStorage
{
    private YmGoalReadStorage $ymGoalReadStorage;

    public function __construct(YmGoalReadStorage $ymGoalReadStorage)
    {
        $this->ymGoalReadStorage = $ymGoalReadStorage;
    }

    public function find(): array
    {
        return array_map(
            fn(array $advantage) => new Advantage(
                Uuid::fromString($advantage['id']),
                $advantage['title'],
                $advantage['body'],
                $advantage['icon_path'],
                $this->ymGoalReadStorage->getKeyOrNullByEntityId(Uuid::fromString($advantage['id']))
            ),
            include __DIR__ . '/../InitialData/advantages.php'
        );
    }

    public function findByIds(array $ids): array
    {
        $advantages = include __DIR__ . '/../InitialData/advantages.php';
        $output = [];

        foreach ($advantages as $advantage) {
            if (in_array($advantage['id'], $ids)) {
                $output[] = new Advantage(
                    Uuid::fromString($advantage['id']),
                    $advantage['title'],
                    $advantage['body'],
                    $advantage['icon_path'],
                    null
                );
            }
        }

        return $output;
    }
}
