<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
$id = '[0-9]+';
//Home
Route::get('/', function(){
	return View::make('index');
});

//Connexion
Route::get('logout', ['uses' => 'UsersController@getLogout']);
Route::get('login', ['uses' => 'UsersController@getLogin']);
Route::post('postlogin', ['uses' => 'UsersController@postLogin', 'as' => 'postlogin']);

//Contact
Route::post('contact', ['uses' => 'AdminController@contact', 'as' => 'contact']);
<<<<<<< HEAD
Route::post('contactprod', ['uses' => 'AdminController@contactProduct', 'as' => 'contactprod']);
Route::post('reorder', ['uses' => 'ProductsController@sort', 'as' => 'sort']);
=======
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744

//Admin
Route::group(['before' => 'auth', 'prefix' => 'admin'], function(){
	$id = '[0-9]+';
	Route::get('delete/{id}', ['uses' => 'ProductsController@postDelete'])->where('id', $id);
	Route::get('products', ['uses' => 'AdminController@getProducts', 'as' => 'products']);
	Route::post('products', ['uses' => 'ProductsController@store', 'as' => 'store']);
	Route::get('/', ['uses' => 'AdminController@index', 'as' => 'panel']);
<<<<<<< HEAD
	Route::get('getproducts/{id}', ['uses' => 'ProductsController@getProductsByCategory'])->where('id', $id);
=======
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
});
//Produits
Route::get('getproducts/{id}', ['uses' => 'ProductsController@getProductsByCategory'])->where('id', $id);

//Ressources
Route::resource('products', 'ProductsController', ['except' => [ 'destroy']]);
