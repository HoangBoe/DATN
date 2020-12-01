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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::post('customer/register', 'Auth\RegisterController@register');


//Route::post('login', 'APIController@login');
//Route::get('logout', 'APIController@logout');
//
//
//
//
//Route::group(['middleware' => 'auth.jwt'], function () {
//    Route::get('users', 'UserController@index');
//});
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'APIController@login');
    Route::post('logout', 'APIController@logout');
    Route::post('refresh', 'APIController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::post('admin/login', 'API\UserController@login');
Route::post('admin/register', 'API\UserController@register');
Route::post('admin/logout', 'API\UserController@logout');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');

});


Route::get('news', 'NewsController@getlistPost');
Route::get('news/{id}', 'NewsController@getPost');

Route::post('news', 'NewsController@add');
Route::put('news/{id}', 'NewsController@update');
Route::delete('news/{id}', 'NewsController@delete');

Route::get('comment/','CommentController@getAllComment');
Route::get('comment/{id}','CommentController@getComment');


Route::get('userinfo/{id}','CustomerController@getUserInfo');
Route::get('userinfo','CustomerController@getAllUserInfo');

Route::get('search/{product}','ProductController@searchProduct');

Route::post('search', 'SearchController@searchProduct');





