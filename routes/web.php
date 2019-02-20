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
Comando para listar:
php artisan route:list
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@getHome');

Route::group(['middleware' => 'auth'], function() {
Route::get('/catalog', 'CatalogController@getIndex');
Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/catalog/create', 'CatalogController@getCreate');
Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');

Route::post('/catalog/create', 'CatalogController@postCreate');
Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');

Route::put('/catalog/rent/{id}', 'CatalogController@putRent');
Route::put('/catalog/return/{id}', 'CatalogController@putReturn');
Route::delete('/catalog/delete/{id}', 'CatalogController@deleteMovie');




});

Route::get('/user', 'UserController@getShow');
Route::get('/user/edit', 'UserController@getEdit');
Route::get('/user/edit/{id}', 'UserController@getEdit');


//Route::get('/login', 'CatalogController@getLogin');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/login', function()
// {
//     return view('auth.login');
// });
// Route::get('/logout', function()
// {
//     return 'Logout usuario';
// });
// Route::get('/catalog', function()
// {
//     return view('catalog.index');
// });
// Route::get('catalog/show/{id}', function($id)
// {
//     return view('catalog.show', array('id'=>$id));
// });
// Route::get('/catalog/create', function()
// {
//     return view('catalog.create');
// });
// Route::get('catalog/edit/{id}', function($id)
// {
//     return view('catalog.edit', array('id'=>$id));
// });
