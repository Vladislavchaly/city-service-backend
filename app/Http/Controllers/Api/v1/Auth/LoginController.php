<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request, UsersRepositoryInterface $usersRepository): Response
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {

            $user = $usersRepository->getByEmail($credentials['email']);

            return response([
                'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
            ], 200);

        }

        return response(__('auth.failed'), 422);
    }
}


