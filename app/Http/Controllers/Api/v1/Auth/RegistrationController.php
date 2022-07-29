<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\RegistrationRequest;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;
//TODO Add email confirmation
//TODO Add referral email
//TODO move create token functional to extra class
class RegistrationController
{
    public function __invoke(RegistrationRequest $request, UsersRepositoryInterface $usersRepository)
    {
        $request->validated();
        $user = $usersRepository->create($request->all());

        return response()->json([
            'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken,
        ], Response::HTTP_OK
        );
    }
}
