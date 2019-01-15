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



Route::get('/', 'DashboardController@index');
Route::get('/videos', 'VideosController@index');
Route::get('/products/age', 'ProductsController@ageIndex');
Route::get('/products/size', 'ProductsController@sizeIndex');
Route::get('/products/price', 'ProductsController@priceIndex');
Route::get('/email', 'EmailController@index');
Route::get('/subscribers', 'SubscribersController@index');
Route::get('/payment/paypal', 'PaymentController@paypalIndex');
Route::get('/payment/card', 'PaymentController@cardIndex');
Route::get('/orders', 'OrdersController@index');
Route::get('/about-us', 'AboutUsController@index');
Route::get('/contact-us', 'ContactUsController@index');
Route::get('/email/sent', 'EmailController@sentIndex');
Route::get('/email/compose', 'EmailController@composeIndex');
Route::get('/email/draft', 'EmailController@draftIndex');
Route::get('/email/mail', 'EmailController@mailIndex');
Auth::routes();

