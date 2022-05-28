<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Controllers;

use App\Http\Controllers\Controller;
use BrandHub\Brief\Contracts\EmotionReadStorage;
use Illuminate\Http\JsonResponse;

final class FindEmotionsController extends Controller
{
    private EmotionReadStorage $emotionReadStorage;

    public function __construct(EmotionReadStorage $emotionReadStorage)
    {
        $this->emotionReadStorage = $emotionReadStorage;
    }

    public function __invoke(): JsonResponse
    {
        return new JsonResponse([
            'emotions' => $this->emotionReadStorage->find(),
        ]);
    }
}
