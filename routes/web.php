<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'User\Contact\ContactController@index')->name('contact');
Route::get('/contact/kotaByProvinsi/{id}', 'User\Contact\ContactController@get_kota_by_provinsi')->name('contact.kota_by_provinsi');
Route::post('/contact/store', 'User\Contact\ContactController@store')->name('contact.store');
// Route::get('/', 'FrontController@index')->name('home');
// Route::get('/data', 'FrontController@data')->name('data');
// Route::get('/kontak', 'FrontController@kontak')->name('kontak');
// Route::get('/infografis', 'FrontController@infografis')->name('infografis');
// Route::get('/feedback', 'FrontController@feedback')->name('feedback');
// Route::get('/dokumen', 'FrontController@dokumen')->name('dokumen');
// Route::get('/best-practice', 'FrontController@bestPractice')->name('best-practice');

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
