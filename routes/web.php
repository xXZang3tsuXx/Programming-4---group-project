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

Route::get('/', [
    'uses'=> 'PagesController@init',
    'as' => 'product.index'
]);


Route::get('/home', 'PagesController@init');

Route::get('/shopping-cart', [
    'uses'=>'ProductController@getCart',
    'as' =>'product.shoppingCart'
]);

Route::get('/add-to-cart/{id}',[
   'uses'=> 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);


Route::get('404', 'PagesController@notFound');

Route::get('contact', 'PagesController@contact');

Route::get('cart', 'PagesController@cart');

Route::get('checkout', 'PagesController@checkout');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');	
	Route::get('/users', 'AdminController@getUserData')->name('admin.a_users');
	Route::get('/products', 'AdminController@getProducts')->name('admin.a_products');
	Route::get('/adduser', 'AdminController@addUser')->name('admin.a_addusers');
	Route::get('/addproduct', 'AdminController@showAddProduct')->name('admin.a_addproduct');
	Route::post('/upload/images', [
	  'uses'   =>  'ImageUploadController@uploadImages',
	  'as'     =>  'uploadImage'
	]);
	Route::post('/makeProduct', [
		'uses' => 'ProductController@makeProduct',
		'as' => 'makeProduct'
	]);
	Route::get('/locations', 'AdminController@getLocations');
	Route::get('/', 'AdminController@index')->name('admin.a_dashboard');
});

Route::prefix('test')->group(function() {
	//To test the frontend without logging in
	Route::get('/', function() {
    	return view('admin.a_dashboard');
	}); 
	Route::get('/users', function() {
    	return view('admin.a_users');
	}); 

	Route::get('users/get', [
		'uses' => 'UserController@getUserDetails'
	]);

	Route::get('/products', function() {
	    return view('admin.a_products');
	});
});

Auth::routes(); //Routes : login + register

//Route::get('/home', 'HomeController@index')->name('home');
