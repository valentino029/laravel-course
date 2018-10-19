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
//     return view('layouts/master');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('/belajarView', function () {
//     return view('belajarView');
// });

Route::get('/', 'HomeController@index');

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/tambah', 'KaryawanController@tambah');
Route::get('/karyawan/{id}', 'KaryawanController@show');
Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
Route::get('/karyawan/delete/{id}', 'KaryawanController@delete');
Route::post('/karyawan/store', 'KaryawanController@store');
Route::put('/karyawan/update', 'KaryawanController@update');


Route::get('/jabatan', 'JabatanController@index');
Route::get('/jabatan/tambah', 'JabatanController@tambah');
Route::get('/jabatan/edit/{id}', 'JabatanController@edit');
Route::get('/jabatan/delete/{id}', 'JabatanController@delete');
Route::get('/jabatan/{id}', 'JabatanController@show');
Route::post('/jabatan/store', 'JabatanController@store');
Route::put('/jabatan/update', 'JabatanController@update');


Route::get('/departement', 'DepartementController@index');
Route::get('/departement/tambah', 'DepartementController@tambah');
Route::get('/departement/edit/{id}', 'DepartementController@edit');
Route::get('/departement/delete/{id}', 'DepartementController@delete');
Route::get('/departement/show/{id}', 'DepartementController@show');

Route::get('/arsip', 'ArsipController@index');
Route::get('/arsip/tambah', 'ArsipController@tambah');
Route::get('/arsip/edit/{id}', 'ArsipController@edit');
Route::get('/arsip/delete/{id}', 'ArsipController@delete');
Route::get('/arsip/{id}', 'ArsipController@show');

Route::get('/inventori', 'InventoriController@index');
Route::get('/inventori/tambah', 'InventoriController@tambah');
Route::get('/inventori/edit/{id}', 'InventoriController@edit');
Route::get('/inventori/delete/{id}', 'InventoriController@delete');
Route::get('/inventori/{id}', 'InventoriController@show');