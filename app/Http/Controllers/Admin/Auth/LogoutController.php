<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\OauthAccessToken;

class LogoutController extends Controller
{
    public function __invoke()
    {
        if ($id = auth('api')->id()) {
            OauthAccessToken::where('user_id', $id)->delete();
        }
        return response();
    }
}
