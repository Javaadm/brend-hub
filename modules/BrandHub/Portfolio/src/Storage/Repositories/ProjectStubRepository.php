<?php

declare(strict_types=1);

namespace BrandHub\Portfolio\Storage\Repositories;

use BrandHub\Analytic\Contracts\YmGoalReadStorage;
use BrandHub\Portfolio\Contracts\ProjectReadStorage;
use BrandHub\Portfolio\Models\ProjectReadModel;
use Ramsey\Uuid\Uuid;

final class ProjectStubRepository implements ProjectReadStorage
{
    public function __construct(private readonly YmGoalReadStorage $ymGoalReadStorage) {}

    public function find(): array
    {
        return array_map(
            fn(array $project) => new ProjectReadModel(
                Uuid::fromString($project['id']),
                $project['link'],
                $project['image_path'],
                $this->ymGoalReadStorage->getKeyOrNullByEntityId(Uuid::fromString($project['id']))
            ),
            include __DIR__ . '/../InitialData/projects.php'
        );
    }
}
