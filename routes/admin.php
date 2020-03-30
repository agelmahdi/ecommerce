<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Config::set('auth.defines', 'admin');
    Route::get('login', 'AdminAuth@login');
    Route::post('login', 'AdminAuth@dologin');
    Route::get('forgot-password', 'AdminAuth@forgotPassword');
    Route::post('forgot-password', 'AdminAuth@forgotPasswordPost');
    Route::get('reset/password/{token}', 'AdminAuth@restPassword');
    Route::post('reset/password/{token}', 'AdminAuth@restPasswordFinal');

    Route::group(['middleware' => 'admin:admin'], function () {
        Route::resource('users','UsersController');
        Route::delete('users/destroy/all', 'UsersController@multi_delete');

        Route::resource('admin','AdminController');
        Route::delete('admin/destroy/all', 'AdminController@multi_delete');


        Route::get('/', function () {
            return view('admin.home');
        });
        Route::get('settings', 'SettingsController@setting');
        Route::post('settings', 'SettingsController@setting_save');
        Route::any('logout', 'AdminAuth@logout');
    });

    Route::get('lang/{lang}', function ($lang) {
        session()->has('lang')?session()->forget('lang'):'';
        $lang == 'ar'?session()->put('lang', 'ar'):session()->put('lang', 'en');
        return back();
    });
});
