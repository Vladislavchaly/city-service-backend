<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Models\OauthAccessToken;

class LogoutController extends Controller
{
    public function __invoke()
    {
        if ($id = auth('api')->id()) {
            return OauthAccessToken::where('user_id', $id)->delete();
        }
    }
}
