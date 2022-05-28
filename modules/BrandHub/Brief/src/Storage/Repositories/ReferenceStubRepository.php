<?php

declare(strict_types=1);

namespace BrandHub\Brief\Storage\Repositories;

use BrandHub\Analytic\Contracts\YmGoalReadStorage;
use BrandHub\Brief\Contracts\ReferenceReadStorage;
use BrandHub\Brief\Models\Reference;
use BrandHub\Brief\Storage\Exceptions\ReferenceNotFound;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class ReferenceStubRepository implements ReferenceReadStorage
{
    private YmGoalReadStorage $ymGoalReadStorage;

    public function __construct(YmGoalReadStorage $ymGoalReadStorage)
    {
        $this->ymGoalReadStorage = $ymGoalReadStorage;
    }

    /**
     * @return Reference[]
     */
    public function findByBusinessType(string $businessType, int $limit, int $offset): array
    {
        $references = include __DIR__ . '/../InitialData/references.php';

        $output = [];
        $counter = 0;

        foreach ($references as $reference) {
            if ($reference['business_type'] !== $businessType) {
                continue;
            }

            $counter++;

            if ($counter <= $offset) {
                continue;
            }

            $output[] = new Reference(
                Uuid::fromString($reference['id']),
                $businessType,
                $reference['image_path'],
                $this->ymGoalReadStorage->getKeyOrNullByEntityId(Uuid::fromString($reference['id']))
            );

            if ($counter === $limit) {
                break;
            }
        }

        return $output;
    }

    /**
     * @return Reference[]
     */
    public function findByIds(array $ids): array
    {
        $references = include __DIR__ . '/../InitialData/references.php';
        $output = [];

        foreach ($references as $reference) {
            if (in_array($reference['id'], $ids)) {
                $output[] = new Reference(
                    Uuid::fromString($reference['id']),
                    $reference['business_type'],
                    $reference['image_path'],
                    null
                );
            }
        }

        return $output;
    }

    /**
     * @throws ReferenceNotFound
     */
    public function get(UuidInterface $id): Reference
    {
        $references = include __DIR__ . '/../InitialData/references.php';

        foreach ($references as $reference) {
            if ($reference['id'] === $id->toString()) {
                return new Reference(
                    Uuid::fromString($reference['id']),
                    $reference['business_type'],
                    $reference['image_path'],
                    null
                );
            }
        }

        throw new ReferenceNotFound();
    }
}
