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
    Route::delete('logout', 'LogoutController')->name('delete');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
