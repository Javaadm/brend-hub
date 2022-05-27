<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Api\v1\Controllers;

use App\Http\Controllers\Controller;
use BrandHub\Brief\Http\Api\v1\Requests\SubmitContactMeRequest;
use BrandHub\Brief\Mail\ContactMeSubmitted\BusinessNotificationMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

final class SubmitContactMeController extends Controller
{
    public function __invoke(SubmitContactMeRequest $request)
    {
        Mail::send(new BusinessNotificationMail($request->getName(), $request->getPhone()));

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
