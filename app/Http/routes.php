<?php

Route::group(['middleware' => ['web']], function () {

	//BACK ROUTE
	//ALL
	Route::get('admin', [
		'uses' => 'AdminController@admin',
		'as' => 'admin',
		'middleware' => 'admin'
	]);
	//MEDIA
	Route::get('admin/media', [
		'uses' => 'AdminController@filemanager',
		'as' => 'medias',
		'middleware' => 'redac'
	]);
	//BLOG
	Route::put('postseen/{id}', 'BlogController@updateSeen');
	Route::put('postactive/{id}', 'BlogController@updateActive');
	Route::resource('admin/blog', 'BlogController', [
		'except' => ['index','show']
	]);
	Route::get('admin/blog', ['uses' => 'BlogController@indexOrder', 'as' => 'blog.order']);
	Route::resource('admin/blog/comment', 'CommentController', [
		'except' => ['create', 'show']
	]);
	Route::resource('post/comment', 'CommentController', [
		'except' => ['create', 'show']
	]);
	Route::resource('admin/blog', 'BlogController', [
		'except' => ['index', 'show']
	]);

	


	//FRONT ROUTE
	

	//BLOG
	Route::get('blog/search/', 'BlogController@search');
	Route::get('blog/tag', 'BlogController@tag');
	Route::get('blog/{slug}', 'BlogController@show');
	Route::get('blog', 'BlogController@indexFront');
	
	
	Route::get('/u/{username}', 
	  array('as' => 'profile-user', 
	        'uses' => 'ProfileController@profile'
));
	Route::get('/p/{id}', 
	  array('as' => 'profile-user', 
	        'uses' => 'ProfileController@view_post'
));
	




	Route::resource('contact', 'ContactController', [
		'except' => ['show', 'edit']
	]);

	// Home
	


	// Admin
	

	


	// Blog
	
	

	

	

	// Comment
	

	Route::put('commentseen/{id}', 'CommentController@updateSeen');
	Route::put('uservalid/{id}', 'CommentController@valid');


	// Contact
	


	// User
	Route::get('user/sort/{role}', 'UserController@indexSort');

	Route::get('user/roles', 'UserController@getRoles');
	Route::post('user/roles', 'UserController@postRoles');

	Route::put('userseen/{user}', 'UserController@updateSeen');

	Route::resource('user', 'UserController');

	// Authentication routes...
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');

	// Resend routes...
	Route::get('auth/resend', 'Auth\AuthController@getResend');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::get('/', [
		'uses' => 'HomeController@index', 
		'as' => 'home'
	]);
	Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');
	

});