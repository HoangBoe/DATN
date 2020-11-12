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
            /*ADMIN*/
Route::get('/admin/product/{id}/quickEdit','ProductController@quickEdit');
Route::put('/admin/quickUpdate/product/','ProductController@quickUpdate');
Route::get('/admin/category/{id}/quickEdit','CategoryController@quickEdit');
Route::put('/admin/quickUpdate/category/','CategoryController@quickUpdate');
Route::get('/admin/brand/{id}/quickEdit','BrandController@quickEdit');
Route::put('/admin/quickUpdate/brand/','BrandController@quickUpdate');
Route::get('/admin/news/{id}/quickEdit','NewsController@quickEdit');
Route::get('/admin/news/list_comment','NewsController@listComment');
Route::delete('/admin/news/list_comment/delete/{id}','NewsController@deleteComment');
Route::post('admin/news/list_comment/lock','NewsController@censorComment');
Route::put('/admin/quickUpdate/news/','NewsController@quickUpdate');
Route::get('/admin/categoryNews/{id}/quickEdit','CategoryNewsController@quickEdit');
Route::put('/admin/quickUpdate/categoryNews/','CategoryNewsController@quickUpdate');

Route::get('/admin/order/change-status', 'OrderController@changeStatus');
Route::post('/admin/order/change-status', 'OrderController@changeStatus');
Route::get('/admin/send-mail', 'EmailController@send');
Route::post('/admin/send-email-2','EmailController@send2');
Route::get('/admin/send-mail-tab3', 'SubcriberController@getProductChoose');
Route::get('/admin/subcriber/send-email','SubcriberController@showSendEmailPage');

Route::get('/admin/get-content','EmailController@getContent');


Route::resource('admin/product','ProductController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/order','OrderController');
Route::resource('admin/account','AccountController');
Route::resource('admin/brand','BrandController');
Route::resource('admin/subcriber','SubcriberController');
Route::resource('admin/news','NewsController');
Route::resource('admin/categoryNews','CategoryNewsController');

Route::get('admin/accountCustomer','AccountController@indexCustomer');
Route::post('admin/accountCustomer/lock','AccountController@lockCustomer');



Route::get('/admin','DashboardController@showAdminPage');
Route::get('/admin/new-orders','DashboardController@showNewOrder');
Route::get('/admin/count-orders','DashboardController@getCountNewOrderApi');
Route::get('/admin/count-products','DashboardController@getNewProduct');
Route::get('/admin/count-subscribers','DashboardController@getCountSubscriber');
Route::get('/admin/total-revenue','DashboardController@getTotalRevenue');
Route::get('/admin/chart','DashboardController@getChartDataApi');
Route::get('/admin/chart-1','DashboardController@getPieChartDataApi');
Route::get('/admin/chart-2','DashboardController@getColumnChartDataApi');

Route::get('admin/login', 'AdminLoginController@login');
Route::post('admin/login', 'AdminLoginController@postLogin');
Route::get('admin/logout', 'AdminLoginController@logout');
Route::get('admin/register', 'AdminLoginController@registerAdmin');
Route::post('admin/register', 'AdminLoginController@createAdminAccount');

Route::post('/admin/order-search','OrderController@search');




        /*USER*/

Route::get('/','HomepageController@showHomepage');
Route::get('/faqs','HomepageController@showFAQs');
Route::get('/return','HomepageController@showReturn');
Route::get('/brands','HomepageController@showBrands');
Route::get('/about','HomepageController@showAbout');
Route::get('/contact','HomepageController@showContact');

Route::get('/product','UserProductController@index');
Route::post('/product','UserProductController@search');
Route::get('/product/{product}','UserProductController@show');

Route::get('/news','UserNewsController@index');
Route::get('/news/{id}.html','UserNewsController@newsDetail')->where('id', '[0-9]+');
Route::post('/news/{id}.html','UserNewsController@postComment')->where('id', '[0-9]+');
Route::get('/news/categoryNews{id}.html','UserNewsController@newsCategory');
Route::get('/add-subcriber','EmailController@addSubcriber');

Route::post('/san-pham-test','UserProductController@search');
Route::post('/add-to-cart','ShoppingCartController@addToCart');
Route::get('/view-cart','ShoppingCartController@showCart');
Route::get('/destroy-cart', 'ShoppingCartController@destroyCart');
Route::put('/update-cart', 'ShoppingCartController@updateCart');
Route::post('/checkout', 'ShoppingCartController@checkoutCart');

Route::post('/remove-item', 'ShoppingCartController@removeItem');
Route::get('/checkout', 'ShoppingCartController@checkout');
Route::get('/payment', 'ShoppingCartController@payment');
Route::get('/receipt', 'ShoppingCartController@receipt');

Route::get('/blade',function () {
    return view('layouts.new-master');
});

Route::get('/user/login', 'UserLoginController@login');
Route::post('/user/login', 'UserLoginController@postLogin');
Route::get('/user/logout', 'UserLoginController@logout');
Route::post('/user/register-process', 'UserLoginController@createCustomerAccount');
Route::get('/userprofile','UserLoginController@showUserProfile');
Route::post('profile/store','UserLoginController@store')->name('profile.store');
Route::post('profile/avatar','UserLoginController@avatar')->name('profile.avatar');

Auth::routes();


