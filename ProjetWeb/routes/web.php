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

//First route for these pages, we now use resourceto get them

// Route::get('/bonus', 'PagesController@bonus');
// Route::get('/product', 'PagesController@product');
// Route::get('/event', 'PagesController@event');

Route::get('/', 'PagesController@index');
Route::get('/loginRe', 'PagesController@login');
Route::get('/contact', 'PagesController@contact');
Route::get('/basket', 'PagesController@basket');
Route::get('/legale', 'PagesController@legale');
Route::get('/deconnexion', 'PagesController@deconnexion');
Route::get('/perso', 'PagesController@perso')->middleware('App\Http\Middleware\Auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UtilisateurController');

//Route to subpages
//Route::middleware('auth')->group(function () {
Route::resource('products', 'ProductsController');
Route::resource('events', 'EventsController');
Route::resource('ideas', 'IdeasController');
Route::resource('comments', 'CommentsController');
Route::resource('perso', 'PersoController');

//});
Route::resource('reviews', 'ReviewsController');