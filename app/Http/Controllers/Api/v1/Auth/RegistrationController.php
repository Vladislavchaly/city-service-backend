<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\Api\v1\Auth\RegistrationRequest;
use App\Notifications\Auth\SuccessRegistration;
use App\Repositories\Eloquent\UsersRepository;

class RegistrationController extends \App\Http\Controllers\Api\ResponseApiController
{
    public function __invoke(RegistrationRequest $request)
    {
        // Create new user
        $user = UsersRepository::createUser($request->all());

        // Send success registration email
        $user->notify(
            (new SuccessRegistration($request->get('password')))->locale(app()->getLocale())
        );

        return response()->success(
            \App\Http\Resources\Api\v1\Auth\RegistrationResource::make($user)
        );
    }
}
