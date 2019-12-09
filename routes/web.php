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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'SiswaController@home');
Route::resource('siswa', 'SiswaController');

// Route::resource('siswa', 'SiswaController');
Route::get('siswabyAb', 'SiswaController@indexByAb')->name('siswa.byAb');
Route::get('siswaby20yo', 'SiswaController@indexBy20')->name('siswa.by20');
Route::get('siswabyKecamatan', 'SiswaController@indexByKecamatan')->name('siswa.byKecamatan');
