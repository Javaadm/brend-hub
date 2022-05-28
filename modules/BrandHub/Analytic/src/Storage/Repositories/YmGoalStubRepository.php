<?php

declare(strict_types=1);

namespace BrandHub\Analytic\Storage\Repositories;

use BrandHub\Analytic\Contracts\YmGoalReadStorage;
use Ramsey\Uuid\UuidInterface;

final class YmGoalStubRepository implements YmGoalReadStorage
{
    public function getKeyOrNullByEntityId(UuidInterface $entityId): ?string
    {
        $ymGoals = include __DIR__ . '/../InitialData/ym-goals.php';

        foreach ($ymGoals as $ymGoal) {
            if ($ymGoal['entity_id'] === $entityId->toString()) {
                return $ymGoal['key'];
            }
        }

        return null;
    }
}
