<?php

Route::get('/', function () {
    return view('website.home');
});

// Login Staff
Route::prefix('system')->as('backend.')->group( function () {
    Route::get('login', 'Backend\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Backend\Auth\LoginController@login')->name('login.submit');
    Route::get('logout', 'Backend\Auth\LoginController@logout')->name('logout')->middleware('auth:staff');

    Route::get('register', 'Backend\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Backend\Auth\RegisterController@register')->name('register.submit');

    Route::get('password/reset', 'Backend\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Backend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Backend\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Backend\Auth\ResetPasswordController@reset')->name('password.update');
});

// Login Merchant
Route::prefix('merchant')->as('merchant.')->group( function () {
    Route::get('login', 'Merchant\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Merchant\Auth\LoginController@login')->name('login.submit');
    Route::get('logout', 'Merchant\Auth\LoginController@logout')->name('logout');
//Route::get('register', 'Merchant\Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Merchant\Auth\RegisterController@register')->name('register.post');
    Route::get('password/reset', 'Merchant\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Merchant\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Merchant\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Merchant\Auth\ResetPasswordController@reset')->name('password.update');
});

//Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');
