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


Route::auth();
Route::get('/', [
    'uses'=>'MainController@index',
    'as'=>'main.user_app'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'GoodController@getAddToCart',
    'as' => 'good.addToCart',
]);

Route::get('/cart}', [
    'uses' => 'GoodController@getCart',
    'as' => 'good.cart',
]);

Route::get('/products}', [
    'uses' => 'GoodController@getCart',
    'as' => 'good.products',
]);



Route::get('/admin', 'AdminController@index');
Route::get('/admin/categories', 'AdminController@categories');
Route::post('/admin/category', 'CategoryController@store');
Route::delete('/admin/category/{category}', 'CategoryController@destroy');
Route::get('/admin/categories/{category}', 'CategoryController@goods');
Route::delete('/admin/category/{category}/{good}', 'GoodController@destroy');
Route::post('/admin/good', 'GoodController@store');
Route::get('/admin/orders', 'OrderController@index');
Route::get('/admin/orders/{order}', 'OrderController@order');
Route::delete('/admin/order/{order}', 'OrderController@destroy');


Route::get('/about', 'MainController@about');

Route::get('/sess', 'MainController@sess');
Route::get('/sess1', 'MainController@sess1');

Route::get('/contacts', 'MainController@contacts');
Route::get('/basket', 'MainController@basket');
Route::get('/{category}', 'MainController@category');
//Route::get('/categories/{category}', 'UserCategoryController@category');


//Route::get('/categories/{category}/{product}', 'UserProductController@index');
//Route::post('/addBasket', 'UserProductController@to_basket');

//Route::post('/orders', 'BasketController@buy');


