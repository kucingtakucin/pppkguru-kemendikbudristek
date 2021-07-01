<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group([
    'prefix' => 'dashboard'
], function () {
    Route::get('/', 'Operator\Dashboard\DashboardController@index')->name('operator.dashboard');
});

// Route::group([
//     'prefix' => 'kategori-pengaduan'
// ], function () {
//     Route::get('/', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@index')->name('operator.ref-kategori-pengaduan.index');
//     Route::get('/create', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@create')->name('operator.ref-kategori-pengaduan.create');
//     Route::post('/', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@store')->name('operator.ref-kategori-pengaduan.store');
//     Route::get('/{refKategoriPengaduan}/edit', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@edit')->name('operator.ref-kategori-pengaduan.edit');
//     Route::put('/{refKategoriPengaduan}', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@update')->name('operator.ref-kategori-pengaduan.update');
// });

Route::group([
    'prefix' => 'pengaduan'
], function () {
    Route::get('/', 'Operator\Pengaduan\PengaduanController@index')->name('operator.pengaduan.index');
    Route::get('/create', 'Operator\Pengaduan\PengaduanController@create')->name('operator.pengaduan.create');
    Route::get('/get_chat/{pengaduan}', 'Operator\Pengaduan\PengaduanController@get_chat')->name('operator.pengaduan.get_chat');
    Route::post('/close_chat/{pengaduan}', 'Operator\Pengaduan\PengaduanController@close_chat')->name('operator.pengaduan.close_chat');
    Route::post('/send/{pengaduan}', 'Operator\Pengaduan\PengaduanController@send')->name('operator.pengaduan.send');
    Route::get('/{pengaduan}/chat', 'Operator\Pengaduan\PengaduanController@chat')->name('operator.pengaduan.chat');
    Route::get('/{pengaduan}/edit', 'Operator\Pengaduan\PengaduanController@edit')->name('operator.pengaduan.edit');
});
