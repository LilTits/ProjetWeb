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

Route::get('/', 'PagesController@index');
// Route::get('/product', 'PagesController@product');
Route::get('/event', 'PagesController@event');
Route::get('/loginRe', 'PagesController@login');
Route::get('/contact', 'PagesController@contact');
Route::get('/basket', 'PagesController@basket');
Route::get('/bonus', 'PagesController@bonus');
Route::get('/deconnexion', 'PagesController@deconnexion');
Route::get('/perso', 'PagesController@perso');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/users', 'UtilisateurController');


    



Route::resource('products', 'ProductsController');