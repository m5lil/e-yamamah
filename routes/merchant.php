<?php


Route::get('/', 'MainController@index')->name('home');
Route::get('lang', 'MainController@change_lang')->name('lang');
Route::get('lock', 'Auth\LoginController@lock')->name('lock');


Route::get('/provider/{id}', 'ServiceController@provider')->name('provider');
Route::get('/service/{id}', 'ServiceController@service')->name('service');
Route::post('/service/{id}', 'ServiceController@payment')->name('payment');




