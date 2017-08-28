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

Route::get('/test', function() {
	return App\User::find(1)->profile;
});

Route::get('/', [
	'uses' => 'FrontEndController@index',
	'as' => 'index'
]);


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

	Route::get('/post/edit/{id}', [
		'uses' => 'PostsController@edit',
		'as' => 'admin.post.edit'
	]);

	Route::post('/post/update/{id}', [
		'uses' => 'PostsController@update',
		'as' => 'admin.post.update'
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

	Route::get('/post/restore/{id}', [
		'uses' => 'PostsController@restore',
		'as' => 'admin.post.restore'
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


	//Start tag
	Route::get('/tags', [
		'uses' => 'TagsController@index',
		'as' => 'tag.index'
	]);

	Route::get('/tags/create', [
		'uses' => 'TagsController@create',
		'as' => 'tag.create'
	]);

	Route::post('tags/store', [
		'uses' => 'TagsController@store',
		'as' => 'tag.store'
	]);

	Route::get('/tags/edit/{id}', [
		'uses' => 'TagsController@edit',
		'as' => 'tag.edit'
	]);

	Route::post('/tags/update/{id}', [
		'uses' => 'TagsController@update',
		'as' => 'tag.update'
	]);

	Route::get('/tags/delete/{id}', [
		'uses' => 'TagsController@destroy',
		'as' => 'tag.delete'
	]);
	//End tag


	//Start user
	Route::get('/user', [
		'uses' => 'UsersController@index',
		'as' => 'user.index'
	]);

	Route::get('/user/create', [
		'uses' => 'UsersController@create',
		'as' => 'user.create'
	]);

	Route::post('/user/store', [
		'uses' => 'UsersController@store',
		'as' => 'user.store'
	]);

	Route::get('/user/admin/{id}', [
		'uses' => 'UsersController@admin',
		'as' => 'user.admin'
	]);

	Route::get('/user/notadmin/{id}', [
		'uses' => 'UsersController@notadmin',
		'as' => 'user.notadmin'
	]);

	Route::get('/user/profile', [
		'uses' => 'ProfileController@index',
		'as' => 'user.profile.index'
	]);

	Route::post('/user/profile/update', [
		'uses' => 'ProfileController@update',
		'as' => 'user.profile.update'
	]);

	Route::get('/user/delete/{id}', [
		'uses' => 'UsersController@destroy',
		'as' => 'user.delete'
	]);
	//End user


	Route::get('/setting/index', [
		'uses' => 'SettingsController@index',
		'as' => 'setting.index'
	]);

	Route::post('/setting/update', [
		'uses' => 'SettingsController@update',
		'as' => 'setting.update'
	]);
});

