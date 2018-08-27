<?php

Route::get('/', 'PagesController@home');

Route::get('casos/{nombre?}', 'PagesController@caso');
Route::get('casos/{nombre?}', 'PagesController@caso');



Route::group(['prefix'=>'donito','middleware'=> 'auth'],function(){
    Route::get('/','Administrador\PagesControllerAdmin@home');
    Route::get('/estadisticas','Administrador\PagesControllerAdmin@home')->name('admin.estadisticas');
    Route::get('/donantes','Administrador\PagesControllerAdmin@donantes')->name('admin.donantes');
    Route::get('/creardonante','Administrador\PagesControllerAdmin@creardonante')->name('admin.creardonante');
});


//Route::auth();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');