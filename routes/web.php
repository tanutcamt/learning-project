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

use App\Drink;
use App\Http\Controllers\DrinkController;


Route::get('/admin/drink', 'DrinkController@index');

Route::get('/admin/drink/create','DrinkController@create');

Route::post('/admin/drink','DrinkController@store');

Route::get('/admin/drink/{drink}/edit','DrinkController@edit');

Route::put('/admin/drink/{drink}','DrinkController@update');


Route::get('/admin/food', 'FoodController@index');

Route::get('/admin/food/create','FoodController@create');

Route::post('/admin/food','FoodController@store');

Route::get('/admin/food/{food}/edit','FoodController@edit');

Route::put('/admin/food/{food}', 'FoodController@update');

Route::delete('/admin/food/{food}','FoodController@destroy');

