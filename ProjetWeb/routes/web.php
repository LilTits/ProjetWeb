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

//First route for these pages, we now use resource to get them

// Route::get('/bonus', 'PagesController@bonus');
// Route::get('/product', 'PagesController@product');
// Route::get('/event', 'PagesController@event');
// Route::get('/basket', 'PagesController@basket');

Route::get('/', 'PagesController@index');
//Route::get('/loginRe', 'PagesController@login');
Route::get('/contact', 'PagesController@contact');
Route::get('/legale', 'PagesController@legale');
Route::get('/deconnexion', 'PagesController@deconnexion');
Route::get('/perso', 'PagesController@perso')->middleware('App\Http\Middleware\Auth');
Route::get('/emails', 'SendeMailController@sendemail');
Route::get('/email', 'SendeMail@sendemail');
Route::get('/downloadsf', 'Download@DownloadAll');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// TODO change this to users? we'll see later
Route::resource('/users', 'UtilisateurController');

//Route to database
Route::resource('Adresses', 'AdressesController');
Route::resource('carts', 'CartsController');
Route::resource('centers', 'CentersController');
Route::resource('comment_likes', 'CommentLikesController');
Route::resource('comments', 'CommentsController');
Route::resource('event_categories', 'EventCategoriesController');
Route::resource('event_likes', 'EventLikesController');
Route::resource('event_participants', 'EventParticipantsController');
Route::resource('events', 'EventsController');
Route::resource('ideas', 'IdeasController');
Route::resource('images', 'ImagesController');
Route::resource('orders', 'OrdersController');
Route::resource('permissions', 'PermissionsController');
Route::resource('product_categories', 'ProductCategoriesController');
Route::resource('products', 'ProductTypesController');
Route::resource('product_types', 'ProductTypesController');
Route::resource('reviews', 'ReviewsController');
Route::resource('roles', 'RolesController');
Route::resource('tickets', 'TicketsController');
Route::resource('users', 'UsersController');
Route::resource('visits', 'VisitsController');
Route::resource('perso', 'PersoController');
//Route::resource('emails', 'SendeMailController@sendemail');

// Basket

Route::get('/carts', 'CartsController@index')->name('carts.index');
Route::post('/carts', 'CartsController@store')->name('carts.store');

// Route::get('/addToCart/{id}', [
//     'uses' => 'ProductTypesController@getAddToCart',
//     'as' => 'products.addToCart'
// ]);

// Route::delete('/deleteCart/{id}', [
//     'uses' => 'ProductTypesController@deleteCart',
//     'as' => 'products.deleteCart'
// ]);

// Route::get('/basket', [
//     'uses' => 'ProductTypesController@getCart',
//     'as' => 'products.basket'
// ]);