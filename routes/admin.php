<?php
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
    Route::delete('logout', 'LogoutController')->name('logout')->middleware('auth:api');
});



Route::group(['prefix' => 'users', 'namespace' => 'Users', 'as' => 'users.'], function () {
    Route::get('me', 'MeController')->name('me')->middleware(['auth:api', 'admin.check']);
    Route::post('update', 'UpdateController')->name('update')->middleware(['auth:api', 'admin.check']);
});