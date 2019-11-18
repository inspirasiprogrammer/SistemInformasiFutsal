<?php

use App\Sifut;

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


Auth::routes();

Route::middleware("auth")->group(function(){
    Route::get('/home', function(){
        if (Auth::user()->level=='a'){
            $data = Sifut::paginate(10);
            return view("admin.list",compact("data"));
        }else{
            return view('dashboard');
        }
        
    })->name("home");

    
    Route::get('/admin/form', function(){
        return view('admin.form');
    })->name("admin.form")
    ;
    Route::get('/jenis/form', function(){
        return view('jenis.form');
    })->name("jenis.form");

    Route::get('/jenis/list', function(){
        return view('jenis.list');
    })->name("jenis.list");
    Route::get('lapangan/list', "LapanganController@lapanganlist")->name("lapangan.list");
    Route::get('lapangan/form', "LapanganController@lapanganform")->name("lapangan.form");
    Route::get('sewa', "LapanganController@sewa")->name("sewa");

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
