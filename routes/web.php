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

Auth::routes();

 Route::group(['/', 'namespace' => 'SuperAdmin'], function(){
	// Route::get('home', 'HomeController@index')->name('home');
	Route::get('home', 'SystemController@index')->name('home');

	Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('superadmin.showlogin');
		Route::post('login', 'LoginController@doLogin')->name('superadmin.login');
		Route::get('logout', 'LoginController@logout')->name('superadmin.logout');
	});

	//MENAMPILKAN MODULE  DAN MENU
	//MENAMPILKAN KONTEN

	Route::group(['namespace' => 'Crud'], function () {
		Route::get('role', 'RoleManagementController@index')->name('superadmin.role.index');
		Route::get('role/newrole', 'RoleManagementController@create')->name('superadmin.role.tambahdata');
		//Route::get('role/update', 'RoleManagementController@updateRole')->name('superadmin.role.editdata');
		Route::get('user', 'ControllerUser@data')->name('superadmin.user.data');
	    Route::get('user/newuser', 'ControllerUser@tambah')->name('superadmin.user.tambah');
	});


// Route::group(['namespace'=> 'Crud'], function(){	
});
 // });
