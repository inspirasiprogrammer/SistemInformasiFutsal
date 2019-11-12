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

Route::get('/', function () {
    return view('login');
});

Route::get('akun/list', "SifutController@listakun")->name("akun.list");
Route::get('akun/form', "SifutController@formakun")->name("akun.form");

Route::get('karyawan/dashboard', "SifutController@dashboard")->name("dashboard");
Route::get('item/list', "KasirController@itemlist")->name("item.list");
Route::get('item/form', "KasirController@itemform")->name("item.form");



Route::post('/login/simpan',"SifutController@simpanlogin")
    ->name("simpan.login");

Auth::routes();

Route::middleware("auth")->group(function(){
    Route::get('/home', function(){
        if (Auth::user()->level=='a'){
            return view('admin.list');
        }else{
            return view('dashboard');
        }
        
    })->name("home");
    Route::get('/admin', function(){
        return view('admin.list');
    })->name("admin");

    Route::get('lapangan/list', "LapanganController@lapanganlist")->name("lapangan.list");
    Route::get('lapangan/form', "LapanganController@lapanganform")->name("lapangan.form");

    Route::get('jual/list', "KasirController@juallist")->name("jual.list");
    Route::get('jual/form', "KasirController@jualform")->name("jual.form");
    Route::get('jual/bayar', "KasirController@jualbayar")->name("jual.bayar");

    Route::get('beli/list', "KasirController@belilist")->name("beli.list");
    Route::get('beli/form', "KasirController@beliform")->name("beli.form");

    Route::get('item/list', "KasirController@itemlist")->name("item.list");
    Route::get('item/form', "KasirController@itemform")->name("item.form");

    Route::get('customer/list', "CustomerController@customerlist")->name("customer.list");
    Route::get('customer/form', "CustomerController@customerform")->name("customer.form");

});

Route::get("/register",function(){
    return view('register');
})->name("register")->middleware("guest");

Route::get("/login",function(){
    return view('login');
})->name("login")->middleware("guest");
