<?php

declare(strict_types=1);

namespace BrandHub\Brief\Storage\Repositories;

use BrandHub\Brief\Contracts\EmotionReadStorage;
use BrandHub\Brief\Models\Emotion;
use Ramsey\Uuid\Uuid;

final class EmotionStubRepository implements EmotionReadStorage
{
    /**
     * @return Emotion[]
     */
    public function find(): array
    {
        return array_map(
            fn(array $emotion) => new Emotion(
                Uuid::fromString($emotion['id']),
                $emotion['name']
            ),
            include __DIR__ . '/../InitialData/emotions.php'
        );
    }

    /**
     * @return Emotion[]
     */
    public function findByIds(array $ids): array
    {
        $emotions = include __DIR__ . '/../InitialData/emotions.php';
        $output = [];

        foreach ($emotions as $emotion) {
            if (in_array($emotion['id'], $ids)) {
                $output[] = new Emotion(
                    Uuid::fromString($emotion['id']),
                    $emotion['name']
                );
            }
        }

        return $output;
    }
}
