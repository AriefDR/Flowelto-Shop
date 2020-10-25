<?php

use Illuminate\Auth\Events\Logout;
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

Route::prefix('manager')->middleware('role:manager')->group(function () {
    Route::get('home', 'ManagerController@getHome')->name('homeManager');

    Route::get('flower', 'FlowerController@index')->name('flower.index');
    Route::get('flower/create', 'FlowerController@create')->name('flower.create');
    Route::post('flower/create', 'FlowerController@store')->name('flower.store');
});

Route::group(['middleware' => 'role:user'], function () {
});
