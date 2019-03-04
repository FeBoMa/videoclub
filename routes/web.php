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


//Company
Route::get('/catalog/company', 'CompanyController@getIndex');
Route::get('/catalog/company/show/{id}', 'CompanyController@getShow');
Route::get('/catalog/company/create', 'CompanyController@getCreate');
Route::get('/catalog/company/edit/{id}', 'CompanyController@getEdit');
Route::delete('/catalog/company/delete/{id}', 'CompanyController@deleteCompany');

Route::post('/catalog/company/create', 'CompanyController@postCreate');
Route::put('/catalog/company/edit/{id}', 'CompanyController@putEdit');

//Local
Route::get('/catalog/local', 'LocalController@getIndex');
Route::get('/catalog/local/show/{id}', 'LocalController@getShow');
Route::get('/catalog/local/create', 'LocalController@getCreate');
Route::get('/catalog/local/edit/{id}', 'LocalController@getEdit');
Route::delete('/catalog/local/delete/{id}', 'LocalController@deleteLocal');

Route::post('/catalog/local/create', 'LocalController@postCreate');
Route::put('/catalog/local/edit/{id}', 'LocalController@putEdit');

//Local
Route::get('/catalog/local/sala', 'SalaController@getIndex');
Route::get('/catalog/local/sala/show/{id}', 'SalaController@getShow');
Route::get('/catalog/local/sala/create', 'SalaController@getCreate');
Route::get('/catalog/local/sala/edit/{id}', 'SalaController@getEdit');
Route::delete('/catalog/local/sala/delete/{id}', 'SalaController@deleteSala');

Route::post('/catalog/local/sala/create', 'SalaController@postCreate');
Route::put('/catalog/local/sala/edit/{id}', 'SalaController@putEdit');

//Users
Route::get('/user', 'UserController@getShow');
Route::get('/user/edit', 'UserController@getEdit');
Route::put('/user/edit', 'UserController@putEdit');

Route::get('/user/{id}', 'UserController@getShow');
Route::get('/user/edit/{id}', 'UserController@getEdit');
Route::put('/user/edit/{id}', 'UserController@putEdit');

//Subs
Route::get('/subscription/{id}', 'SubscriptionController@getShow');

});

Route::get('/user/add', 'UserController@getCreate');
Route::post('/user/add', 'UserController@postCreate');

Route::get('/register/verify/{code}', 'UserController@getVerify');



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
