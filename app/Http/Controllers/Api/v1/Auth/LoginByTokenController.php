<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginByTokenRequest;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Response;

class LoginByTokenController extends Controller
{
    public function __invoke(LoginByTokenRequest $request, UsersRepositoryInterface $usersRepository): Response
    {

        $user = $usersRepository->getByToken($request['token']);

        if ($user) {
            return response([
                'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
            ], 200);
        }

        return response(__('auth.failed'), 422);
    }
}


