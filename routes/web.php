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

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/home', 'ProductController@index');



Route::resource('products', 'ProductController');

Route::resource('orders', 'OrderController');
Route::get('orderstwo', 'OrderController@create2')->name('orderstwo.create2');

Route::resource('contacts', 'ContactController');
Route::get('/contactstwo', 'ContactController@index2');
Route::get('/contactsthree', 'ContactController@index3');
Route::get('/contactsfour', 'ContactController@index4');
// Route::get('/contactstwo/create', 'ContactController@create2')->name('create.create2');

Route::resource('about', 'AboutController');
Route::get('/abouttwo', 'AboutController@index2');	
Route::get('/aboutthree', 'AboutController@index3');
Route::get('/aboutfour', 'AboutController@index4');

Route::resource('main', 'MainController');

Route::resource('tech', 'TechController');

Route::resource('juice', 'JuiceController');

Route::resource('bricketts', 'PadController');

