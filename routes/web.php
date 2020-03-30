<?php

use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::group(['middleware'=>'Maintenance'],function(){
    Route::get('/',function (){
        return view('web.home');
    });
});
Route::get('maintenance',function (){
    if (setting()->status == 'open'){
        return redirect('/');
    }
    return view('web.maintenance');
});
