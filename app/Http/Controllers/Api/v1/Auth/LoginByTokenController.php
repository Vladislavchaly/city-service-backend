<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginByTokenController extends Controller
{
    public function __invoke(Request $request, UsersRepositoryInterface $usersRepository): Response
    {
        $credentials = $request->validate([
            'token' => ['required'],
        ]);

        $user = $usersRepository->getByToken($credentials['token']);

        if ($user) {
            return response([
                'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
            ], 200);
        }

        return response(__('auth.failed'), 422);
    }
}


