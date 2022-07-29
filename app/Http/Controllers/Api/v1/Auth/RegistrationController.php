<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\RegistrationRequest;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController
{
    public function __invoke(RegistrationRequest $request, UsersRepositoryInterface $usersRepository)
    {
        $request->validated();
        $user = $usersRepository->create($request->all());
        //Add email confirmation
        //Add referral email
        //TODO move create token functional to extra class
        return response()->json([
            'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken,
        ], Response::HTTP_OK
        );
    }
}
