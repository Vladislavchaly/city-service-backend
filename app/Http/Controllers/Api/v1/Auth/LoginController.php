<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request, UsersRepositoryInterface $usersRepository): Response
    {
        if (Auth::attempt($request->all())) {

            $user = $usersRepository->getByEmail($request['email']);

            return response([
                'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
            ], 200);

        }

        return response(__('auth.failed'), 422);
    }
}


