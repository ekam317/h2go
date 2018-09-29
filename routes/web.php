<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'roles'],'roles' => ['admin','user']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('account-settings','UsersController@getSettings');
    Route::post('account-settings','UsersController@saveSettings');
});

Route::get('auth/{provider}/','Auth\SocialLoginController@redirectToProvider');
Route::get('{provider}/callback','Auth\SocialLoginController@handleProviderCallback');
Route::get('logout','Auth\LoginController@logout');

Auth::routes();

