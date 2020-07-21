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
Auth::routes();
Route::redirect('home', '/'); // this how we redirect users when they type home
Route::get('/', 'HomeController@index');
Route::get('/fast-food', 'HomeController@fastFoodIndex');
Route::get('/fast-food/shops/{id}', 'HomeController@fastFoodShop');
Auth::routes();
