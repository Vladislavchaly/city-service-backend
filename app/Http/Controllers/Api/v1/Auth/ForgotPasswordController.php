<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function __invoke(Request $request)
    {

        $request->validate(['email' => 'required|email']);

        Password::sendResetLink(
            $request->only('email')
        );

        return response('', 200);
    }
}
