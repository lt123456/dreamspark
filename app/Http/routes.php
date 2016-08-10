<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return 1111;
});

Route::get('/test', function () {
    return 1111;
});

Route::group(['namespace'=>'Home', 'prefix'=>'home'],function(){
    Route::get('/','IndexController@index');
});

Route::group(['domain'=>'www.b.com', 'namespace'=>'Admin', 'prefix'=>'admin'],function(){
    Route::get('/',[ 'as'=>'admin','uses'=>'IndexController@index']);


});