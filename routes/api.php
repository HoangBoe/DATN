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

Route::get('/admin/news/getlistpost', 'NewsController@getlistPost');
Route::get('/admin/news/getpost', 'NewsController@getPost');
Route::post('admin/news/addpost', 'NewsController@addPost');
Route::put('admin/news/editpost', 'NewsController@editPost');
Route::delete('admin/news/delete', 'NewsController@deletePost');

Route::get('/admin/getallcomment','NewsController@getAllComment');
Route::get('/admin/getcomment','NewsController@getComment');


Route::get('/user/getuserinfo','CustomerController@getUserInfo');

Route::get('/search/{product}','ProductController@searchProduct');



