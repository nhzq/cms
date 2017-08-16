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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/home', [
		'uses' => 'HomeController@index',
		'as' => 'home'
	]);

	//Start post
	Route::get('/post', [
		'uses' => 'PostsController@index',
		'as' => 'admin.post.index'
	]);

	Route::get('/post/create', [
		'uses' => 'PostsController@create',
		'as' => 'admin.post.create'
	]);

	Route::post('/post/store', [
		'uses' => 'PostsController@store',
		'as' => 'admin.post.store'
	]);

	Route::get('/post/delete/{id}', [
		'uses' => 'PostsController@destroy',
		'as' => 'admin.post.delete'
	]);

	Route::get('/post/trashed', [
		'uses' => 'PostsController@trashed',
		'as' => 'admin.post.trashed'
	]);

	Route::get('/post/kill/{id}', [
		'uses' => 'PostsController@kill',
		'as' => 'admin.post.kill'
	]);
	//End post



	//Start categories
	Route::get('category', [
		'uses' => 'CategoriesController@index',
		'as' => 'category.index'
	]);

	Route::get('/category/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	Route::post('/category/store', [
		'uses'=> 'CategoriesController@store',
		'as' => 'category.store'
	]);

	Route::get('/category/edit/{id}', [
		'uses' => 'CategoriesController@edit',
		'as' => 'category.edit'
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);

	Route::get('/category/delete/{id}', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);
	//End categories


});

