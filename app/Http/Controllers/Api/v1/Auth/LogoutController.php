<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Models\OauthAccessToken;
use Illuminate\Http\Response;

class LogoutController extends Controller
{
    public function __invoke(): Response
    {
        if ($id = auth('api')->id()) {
            //TODO:move to AuthService
            OauthAccessToken::where('user_id', $id)->delete();
        }
        return response();
    }
}
