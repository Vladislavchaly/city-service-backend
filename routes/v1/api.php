<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['prefix' => 'auth', 'namespace' => 'Auth', 'as' => 'auth.'], function () {
    Route::post('login', 'LoginController')->name('login');
    Route::post('registration', 'RegistrationController')->name('registration');
    Route::delete('logout', 'LogoutController')->name('logout');
    Route::post('forgot-password', 'ForgotPasswordController')->name('password.forgot');
    Route::post('reset-password', 'ResetPasswordController')->name('password.reset');
});



Route::group(['prefix' => 'users', 'namespace' => 'Users', 'as' => 'users.'], function () {
    Route::get('me', 'MeController')->name('me')->middleware('auth:api');
    Route::post('update', 'UpdateController')->name('update')->middleware('auth:api');
});


Route::group(['prefix' => 'referrals', 'namespace' => 'Referrals', 'as' => 'referrals.'], function () {
    Route::get('count', 'CountController')->name('count')->middleware('auth:api');
});

//Route::middleware('auth:api')->get('/user/me', function (Request $request) {
//    return $request->user();
//});
