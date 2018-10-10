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
Route::get('/jabatan', 'JabatanController@index');
Route::get('/departement', 'DepartementController@index');
Route::get('/arsip', 'ArsipController@index');
Route::get('/inventori', 'InventoriController@index');
