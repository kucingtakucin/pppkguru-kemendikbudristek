<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group([
    'prefix' => 'dashboard'
], function () {
    Route::get('/', 'Admin\Dashboard\DashboardController@index')->name('admin.dashboard');
});

Route::group([
    'prefix' => 'kategori-pengaduan'
], function () {
    Route::get('/', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@index')->name('admin.ref-kategori-pengaduan.index');
    Route::get('/create', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@create')->name('admin.ref-kategori-pengaduan.create');
    Route::post('/', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@store')->name('admin.ref-kategori-pengaduan.store');
    Route::get('/{refKategoriPengaduan}/edit', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@edit')->name('admin.ref-kategori-pengaduan.edit');
    Route::put('/{refKategoriPengaduan}', 'Admin\RefKategoriPengaduan\RefKategoriPengaduanController@update')->name('admin.ref-kategori-pengaduan.update');
});

Route::group([
    'prefix' => 'pengaduan'
], function () {
    Route::get('/', 'Admin\Pengaduan\PengaduanController@index')->name('admin.pengaduan.index');
    Route::get('/create', 'Admin\Pengaduan\PengaduanController@create')->name('admin.pengaduan.create');
    Route::get('/get_chat/{pengaduan}', 'Admin\Pengaduan\PengaduanController@get_chat')->name('admin.pengaduan.get_chat');
    Route::post('/close_chat/{pengaduan}', 'Admin\Pengaduan\PengaduanController@close_chat')->name('admin.pengaduan.close_chat');
    Route::post('/send/{pengaduan}', 'Admin\Pengaduan\PengaduanController@send')->name('admin.pengaduan.send');
    Route::get('/{pengaduan}/chat', 'Admin\Pengaduan\PengaduanController@chat')->name('admin.pengaduan.chat');
    Route::get('/{pengaduan}/edit', 'Admin\Pengaduan\PengaduanController@edit')->name('admin.pengaduan.edit');
});

Route::group([
    'prefix' => 'faq'
], function () {
    Route::get('/', 'Admin\FAQ\FAQController@index')->name('admin.faq.index');
    Route::get('/create', 'Admin\FAQ\FAQController@create')->name('admin.faq.create');
    Route::post('/', 'Admin\FAQ\FAQController@store')->name('admin.faq.store');
    Route::get('/{fAQ}/edit', 'Admin\FAQ\FAQController@edit')->name('admin.faq.edit');
    Route::put('/{fAQ}', 'Admin\FAQ\FAQController@update')->name('admin.faq.update');
    Route::delete('/destroy', 'Admin\FAQ\FAQController@destroy')->name('admin.faq.destroy');
    // Route::get('/')
});

Route::group([
    'prefix' => 'plotting'
], function () {
    Route::get('/', 'Admin\Plotting\PlottingController@index')->name('admin.plotting.index');
    Route::get('/create', 'Admin\Plotting\PlottingController@create')->name('admin.plotting.create');
    Route::post('/', 'Admin\Plotting\PlottingController@store')->name('admin.plotting.store');
    Route::get('/{plotting}/edit', 'Admin\Plotting\PlottingController@edit')->name('admin.plotting.edit');
    Route::put('/{plotting}', 'Admin\Plotting\PlottingController@update')->name('admin.plotting.update');
    Route::delete('/destroy', 'Admin\Plotting\PlottingController@destroy')->name('admin.plotting.destroy');
    // Route::get('/')
});
Route::group([
    'prefix' => 'operator'
], function () {
    Route::get('/', 'Admin\Operator\OperatorController@index')->name('admin.operator.index');
    Route::get('/create', 'Admin\Operator\OperatorController@create')->name('admin.operator.create');
    Route::post('/', 'Admin\Operator\OperatorController@store')->name('admin.operator.store');
    Route::get('/{id}/edit', 'Admin\Operator\OperatorController@edit')->name('admin.operator.edit');
    Route::put('/{user}', 'Admin\Operator\OperatorController@update')->name('admin.operator.update');
    Route::delete('/destroy', 'Admin\Operator\OperatorController@destroy')->name('admin.operator.destroy');
    // Route::get('/')
});

Route::group([
    'prefix' => 'profil'
], function () {
    Route::get('/deskripsi', 'ProfilController@deskripsi')->name('admin.deskripsi');
    Route::get('/kontak', 'ProfilController@kontak')->name('admin.kontak');
    Route::get('/alasan_program', 'ProfilController@alasan_program')->name('admin.alasan_program');
    Route::get('/tahapan_survey', 'ProfilController@tahapan_survey')->name('admin.tahapan_survey');

    Route::post('/submit/{tbl}/{jns}', 'ProfilController@store')->name('submit.informasi');
    Route::post('/submit/alasan', 'ProfilController@store_alasan')->name('submit.alasan');
    Route::post('/submit/tahapan', 'ProfilController@store_tahapan')->name('submit.tahapan');
    Route::post('/submit/tahapan_isi/{id?}', 'ProfilController@store_tahapan_isi')->name('submit.tahapan.isi');

    Route::put('/delete/alasan/', 'ProfilController@delete_alasan')->name('delete.alasan');
});

Route::group([
    'prefix' => 'infografis'
], function () {
    Route::get('/', 'InfografisController@index')->name('admin.infografis');
    Route::get('/create', 'InfografisController@create')->name('admin.infografis.create');
    Route::get('/edit/{id}', 'InfografisController@edit')->name('admin.infografis.edit');
    Route::post('/post', 'InfografisController@store')->name('admin.infografis.store');
    Route::patch('/patch/{id}', 'InfografisController@update')->name('admin.infografis.update');
    Route::delete('/delete', 'InfografisController@delete')->name('admin.infografis.delete');
});


Route::group([
    'prefix' => 'Dokumen'
], function () {
    Route::get('/', 'DokumenController@index')->name('admin.dokumen');
    Route::post('/post', 'DokumenController@store')->name('admin.dokumen.post');
    Route::post('/edit', 'DokumenController@edit')->name('admin.dokumen.edit');
    Route::patch('/patch', 'DokumenController@update')->name('admin.dokumen.update');
    Route::delete('/delete', 'DokumenController@delete')->name('admin.dokumen.delete');
});
