<?php


Route::get('/', 'MainController@index')->name('home');
Route::get('lang', 'MainController@change_lang')->name('lang');

Route::post('api/pay', 'ApiController@pay')->name('api.pay');
Route::resource('api', 'ApiController');

Route::get('/service/{id}', 'ServiceController@index')->name('service');
Route::get('/provider/{id}', 'ServiceController@provider')->name('provider');
Route::get('lock', 'Auth\LoginController@lock')->name('lock');



