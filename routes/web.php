<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function(){
	Route::get('/', 'ManageController@index');
	Route::get('dashboard', 'ManageController@dashboard')->name('manage.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
