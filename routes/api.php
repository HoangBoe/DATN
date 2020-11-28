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




Route::get('news', 'NewsController@getlistPost');
Route::get('news/{id}', 'NewsController@getPost');

Route::post('news', 'NewsController@add');
Route::put('news/{id}', 'NewsController@update');
Route::delete('news/{id}', 'NewsController@delete');

Route::get('comment/','CommentController@getAllComment');
Route::get('comment/{id}','CommentController@getComment');


Route::get('userinfo/{id}','CustomerController@getUserInfo');
Route::get('userinfo','CustomerController@getAllUserInfo');

Route::get('/search/{product}','ProductController@searchProduct');

Route::post('/search', 'SearchController@searchProduct');





