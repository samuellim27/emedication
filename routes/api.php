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

//Route::get('/accounts', 'AccountController@accounts');

//Route::get('/accounts/{id}', 'AccountController@account');

//Route::post('/cart', 'AccountController@cart');

//Route::post('/accounts', 'AccountController@register');

//Route::post('/accounts', 'AccountController@login');

//Route::delete('/accounts/{id}', 'AccountController@delete');

//Route::put('/accounts/{id}', 'AccountController@update');


//routes for medications
Route::get('/medications', 'MedicationController@medications');

Route::get('/medications/{id}', 'MedicationController@medication');

Route::post('/medications', 'MedicationController@post');


//routes for cart
Route::get('/cart', 'CartController@carts');

Route::get('/cart/{id}', 'CartController@cart');

Route::post('/addtocart', 'CartController@addtocart');

Route::put('/cart/{id}', 'CartController@update');

Route::delete('/cart/{id}', 'CartController@delete');


//routes for healthcondition
Route::get('/healthcondition/{id}', 'HealthConditionController@get');

Route::post('/healthcondition', 'HealthConditionController@post');

Route::put('/healthcondition/{id}', 'HealthConditionController@update');

Route::delete('/healthcondition/{id}', 'HealthConditionController@delete');


//routes for checkout
Route::get('/checkout/{id}', 'CheckOutController@get');

Route::post('/checkout', 'CheckOutController@post');

//routes for users
Route::get('/users', 'API\UserController@users');

Route::get('/users/{id}', 'API\UserController@user');

Route::put('/users/{id}', 'API\UserController@update');

Route::delete('/users/{id}', 'API\UserController@delete');

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');




});



