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

Route::post('customer/register', 'Auth\RegisterController@register');
Route::get('news/getlistpost', 'NewsController@getlistPost');
Route::get('news/getpost', 'NewsController@getPost');
Route::post('news/addpost', 'NewsController@addPost');
Route::put('news/editpost', 'NewsController@editPost');
Route::delete('news/delete', 'NewsController@deletePost');
Route::get('/user/getuserinfo','CustomerController@getUserInfo');



