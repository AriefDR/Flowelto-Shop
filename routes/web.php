<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@getHome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', 'AuthController@getRegister')->name('register');
    Route::post('/register', 'AuthController@postRegister');
    Route::get('/login', 'AuthController@getLogin')->name('login');
    Route::post('/login', 'AuthController@postLogin');
});

Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth');

Route::group(['middleware' => 'role:user'], function () {
    Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('flower.addToCart');
    Route::get('/shopping-cart', 'CartController@getShoppingCart')->name('flower.shoppingCart');
    Route::get('/shopping-cart/{id}', 'CartController@updateCart')->name('update.flower.shoppingCart');

    //storing data to database
    Route::get('/checkout', 'TransacationController@getCheckout')->name('get.checkout');
    Route::post('/checkout', 'TransacationController@postCheckout')->name('post.checkout');
    Route::get('/transaction-history', 'TransacationController@getHistory')->name('get.history');
    Route::get('/transaction-history/{id}', 'TransacationController@getDetailHistory')->name('get.detail.history');

    //change password
    Route::get('/change-password', 'AuthController@getchangePassword')->name('change.password');
    Route::post('/change-password', 'AuthController@postchangePassword');
});
Route::get('/about-us', 'UserController@aboutUs')->name('aboutUs');
Route::get('/flower', 'FlowerController@search')->name('user.search');
Route::get('/category/{category}', 'CategoryFlowerController@searchCategory')->name('user.searchCategory');
Route::get('/{slug}', 'FlowerController@show')->name('userflower.show');

Route::prefix('manager')->middleware('role:manager')->group(function () {
    Route::get('home', 'ManagerController@getHome')->name('homeManager');
    //flower
    Route::get('flower', 'FlowerController@index')->name('flower.index');
    Route::get('flower/create', 'FlowerController@create')->name('flower.create');
    Route::post('flower/create', 'FlowerController@store')->name('flower.store');
    Route::get('flower/{id}/edit', 'FlowerController@edit')->name('flower.edit');
    Route::put('flower/{id}/edit', 'FlowerController@update')->name('flower.update');
    Route::get('flower/search', 'FlowerController@search')->name('flower.search');
    Route::get('flower/{slug}', 'FlowerController@show')->name('flower.show');
    Route::delete('flower/{id}', 'FlowerController@destroy')->name('flower.delete');

    //category
    Route::get('category', 'CategoryFlowerController@index')->name('category.index');
    Route::get('category/create', 'CategoryFlowerController@create')->name('category.create');
    Route::post('category/create', 'CategoryFlowerController@store')->name('category.store');
    Route::get('category/{id}/edit', 'CategoryFlowerController@edit')->name('category.edit');
    Route::put('category/{id}/edit', 'CategoryFlowerController@update')->name('category.update');
    Route::delete('category/{id}', 'CategoryFlowerController@destroy')->name('category.delete');

    //change password
    Route::get('/reset-password', 'AuthController@getchangePassword')->name('manager.change.password');
    Route::post('/reset-password', 'AuthController@postchangePassword');
});
