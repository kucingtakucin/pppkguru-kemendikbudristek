<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'User\Contact\ContactController@index')->name('contact');
Route::get('/contact/chat/{hash}', 'User\Contact\ContactController@chat')->name('contact.chat');
Route::post('/contact/close_chat/{hash}', 'User\Contact\ContactController@close_chat')->name('contact.close_chat');
Route::post('/send/{pengaduan}', 'User\Contact\ContactController@send')->name('contact.send');
Route::get('/contact/chat/{hash}', 'User\Contact\ContactController@chat')->name('contact.chat');
Route::get('/contact/kotaByProvinsi/{id}', 'User\Contact\ContactController@get_kota_by_provinsi')->name('contact.kota_by_provinsi');
Route::post('/contact/store', 'User\Contact\ContactController@store')->name('contact.store');



Route::group([
    'prefix' => 'login'
], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/', 'Auth\LoginController@login')->name('submit.login');
});

Route::group([
    'prefix' => 'register'
], function () {
    Route::get('/', 'Auth\RegisterController@showLoginForm')->name('register');
    Route::post('/', 'Auth\RegisterController@register')->name('submit.register');
    Route::get('/check_nib', 'Auth\RegisterController@check_nib')->name('check_nib');
});

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', 'Auth\LoginController@logout')->name('get.logout');
