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

Route::get('homepage', 'pagescontroller@homepage');
Route::get('/', 'Homecontroller@index');

Route::get('about', 'pagescontroller@about');
Route::get('siswa', 'siswacontroller@siswa');
Route::get('index', 'kontak@index');
// Route::get('siswa', 'siswacontroller@index');
Route::get('cetak', 'siswacontroller@cetak');
Route::get('siswa/create', 'siswacontroller@create');
Route::post('siswa', 'siswacontroller@store');
Route::get('siswa/{siswa}', 'siswacontroller@show');
Route::get('siswa/{siswa}/edit', 'siswacontroller@edit');
Route::post('siswa/{siswa}/update', 'siswacontroller@update');
Route::get('siswa/{siswa}/delete', 'siswacontroller@delete');
Route::get('siswa/{siswa}/profile', 'siswacontroller@profile');


//guru
Route::get('guru', 'gurucontroller@guru');
Route::get('guru/create', 'gurucontroller@create');
Route::post('guru', 'gurucontroller@store');
Route::get('guru/{guru}', 'gurucontroller@show');
Route::get('guru/{guru}/edit', 'gurucontroller@edit');
Route::post('guru/{guru}/update', 'gurucontroller@update');
Route::get('guru/{guru}/delete', 'gurucontroller@delete');

//kelas
Route::get('kelas', 'kelascontroller@kelas');
Route::get('kelas/create', 'kelascontroller@create');
Route::post('kelas', 'kelascontroller@store');
Route::get('kelas/{kelas}', 'kelascontroller@show');
Route::get('kelas/{kelas}/edit', 'kelascontroller@edit');
Route::post('kelas/{kelas}/update', 'kelascontroller@update');
Route::get('kelas/{kelas}/delete', 'kelascontroller@delete');

//walikelas
Route::get('walikelas', 'walicontroller@walikelas');
Route::get('walikelas/create', 'walicontroller@create');
Route::post('walikelas', 'walicontroller@store');
Route::get('walikelas/{walikelas}', 'walicontroller@show');
Route::get('walikelas/{walikelas}/edit', 'walicontroller@edit');
Route::post('walikelas/{walikelas}/update', 'walicontroller@update');
Route::get('walikelas/{walikelas}/delete', 'walicontroller@delete');

Route::get("/test", "Test@first");

Route::get("/registration", "Test@form");

Route::get('template', 'pagescontroller@template');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
