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
Route::post('contactprod', ['uses' => 'AdminController@contactProduct', 'as' => 'contactprod']);
Route::post('reorder', ['uses' => 'ProductsController@sort', 'as' => 'sort']);
Route::post('subscribe/{id}', ['uses' => 'ProductsController@subscribeProduct']);

//Admin
Route::group(['before' => 'auth', 'prefix' => 'admin'], function(){
	$id = '[0-9]+';
	Route::get('delete/{id}', ['uses' => 'ProductsController@postDelete'])->where('id', $id);
	Route::get('news/delete/{id}', ['uses' => 'NewsController@delete'])->where('id', $id);
	Route::get('products', ['uses' => 'AdminController@getProducts', 'as' => 'products']);
	Route::get('news', ['uses' => 'AdminController@getNews', 'as' => 'news']);
	Route::post('products', ['uses' => 'ProductsController@store', 'as' => 'store']);
	Route::post('news', ['uses' => 'NewsController@store']);
	Route::get('/', ['uses' => 'AdminController@index', 'as' => 'panel']);
	Route::get('getproducts/{id}', ['uses' => 'ProductsController@getProductsByCategory'])->where('id', $id);
});
//Produits
Route::get('getproducts/{id}', ['uses' => 'ProductsController@getProductsByCategory'])->where('id', $id);

//Ressources
Route::resource('products', 'ProductsController', ['except' => [ 'destroy', 'show']]);
Route::resource('news', 'NewsController', ['except' => ['create', 'destroy', 'store']]);
Route::get('products/{category}', function()
{
		return View::make('products.index');
})
->where('category', '[A-Za-z]+');
Route::get('products/{id}', ['uses' => 'ProductsController@show'])->where('id', '[0-9]+');
