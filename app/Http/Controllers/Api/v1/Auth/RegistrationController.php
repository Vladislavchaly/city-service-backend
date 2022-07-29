<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\RegistrationRequest;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use Illuminate\Http\Response;
//TODO Add email confirmation
//TODO Add referral email
//TODO move create token functional to extra class
class RegistrationController
{
    public function __invoke(RegistrationRequest $request, UsersRepositoryInterface $usersRepository): Response
    {
        $request->validated();
        $user = $usersRepository->create($request->all());

        return response([
            'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
        ],   200);
    }
}
