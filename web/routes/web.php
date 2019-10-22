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

Route::get('/', "SifutController@home")->name("home");
Route::get('login', "SifutController@login")->name("login");
Route::get('akun/list', "SifutController@listakun")->name("akun.list");
Route::get('karyawan/dashboard', "SifutController@dashboard")->name("dashboard");

Route::post('/login/simpan',"SifutController@simpanlogin")
    ->name("simpan.login");
