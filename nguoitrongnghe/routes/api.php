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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/','HomeController@index');

Route::prefix('v1')->group(function(){
    Route::resource('customer', 'Api\v1\CustomerController');
    Route::resource('category', 'Api\v1\CategoryPostController');
    Route::resource('post', 'Api\v1\PostController');
    Route::resource('bai-viet', 'Api\v1\BaivietController');
    Route::resource('danh-muc', 'Api\v1\DanhmucController');
});

Route::prefix('v2')->group(function(){
    Route::resource('customer', 'Api\v2\CustomerController');
});
