<?php

//namespace App\Http\Controllers\Api\v1\Auth;
//
//use App\Models\OauthAccessToken;
//use App\Models\UserDeviceToken;
//
//class LogoutController extends \App\Http\Controllers\Api\ResponseApiController
//{
//    public function __invoke()
//    {
//        if ($id = auth('api')->id()) {
//            UserDeviceToken::where('user_id', $id)->delete();
//
//            return OauthAccessToken::where('user_id', $id)->delete();
//        }
//    }
//}
