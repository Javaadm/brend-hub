<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use BrandHub\Brief\Http\Api\v1\Controllers\FindEmotionsController;
use BrandHub\Brief\Http\Api\v1\Controllers\FindOffersController;
use BrandHub\Brief\Http\Api\v1\Controllers\FindReferencesController;
use BrandHub\Brief\Http\Api\v1\Controllers\SubmitBriefController;
use BrandHub\Brief\Http\Web\Controllers\LandingController;
use BrandHub\Brief\Http\Api\v1\Controllers\SubmitContactMeController;

Route::group(['prefix' => '/api/v1'], static function () {
    Route::get('/emotions', FindEmotionsController::class);
    Route::get('/offers', FindOffersController::class);
    Route::get('/references', FindReferencesController::class);
    Route::post('/brief', SubmitBriefController::class);
    Route::post('/consultation', SubmitContactMeController::class);
});

Route::get('/', LandingController::class);
