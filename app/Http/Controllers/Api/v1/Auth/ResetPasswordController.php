<?php
//
//namespace App\Http\Controllers\Api\v1\Auth;
//
//use App\Http\Requests\Api\v1\Auth\ResetPasswordRequest;
//use App\Notifications\Auth\ResetPassword;
//use App\Repositories\Eloquent\UsersRepository;
//
//class ResetPasswordController extends \App\Http\Controllers\Api\ResponseApiController
//{
//    public function __invoke(ResetPasswordRequest $request)
//    {
//        $user = UsersRepository::resetPassword($request->all());
//
//        if ($user) {
//            $user->notify((new ResetPassword($user->unhash_password))->locale(app()->getLocale()));
//        } else {
//            return response()->error(trans('auth.check_false_email'));
//        }
//    }
//}
