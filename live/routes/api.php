<?php

use Illuminate\Http\Request;

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
Route::post('/authenticate',['uses'=>'ApiAuthController@authenticate']);
Route::group(['middleware'=>['jwt.auth']],function(){
Route::get('/user', function (Request $request) {
    return (['name'=>'harry']);
});
Route::get('/test', function () {
    return (['name'=>'test']);
});
});