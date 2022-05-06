<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request): Response|Application|ResponseFactory
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {

            $user = User::query()->where('email', $credentials['email'])->first();

            return \response([
                'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
            ], 200);

        }

        return \response(__('auth.failed'), 422);
    }
}


