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
        // if (Auth::user()->level=='a'){
        //     $data = Sifut::paginate(10);
        //     return view("admin.dashboard",compact("data"));
        // }else{
        //     return view('dashboard');
        // }
        return view('dashboard');
    })->name("home");
    
    Route::get('/admin/form', function(){
        return view('admin.form');
    })->name("admin.form");
    Route::get('/admin/list', function(){
        return view('admin.list');
    })->name("admin.list");
    Route::get('/booking', function(){
        return view('penjualan.booking');
    })->name("booking");
    Route::resource('jenis','jeniscontroller');
    Route::get('lapangan/list', "LapanganController@lapanganlist")->name("lapangan.list");
    Route::get('lapangan/form', "LapanganController@lapanganform")->name("lapangan.form");
    Route::get('sewa', "LapanganController@sewa")->name("sewa");
    
    Route::get('/admin/sewa', function(){
        return view('admin.sewa.form');
    })->name("admin.lapangan.sewa");
    Route::get('beli/list', "KasirController@belilist")->name("beli.list");
    
    // Route::get('/admin/beli/list', function(){
    //     return view('admin.pembelian.list');
    // })->name("admin.beli.list");
    // Route::get('/admin/beli/form', function(){
    //     return view('admin.pembelian.form');
    // })->name("admin.beli.form");
    
    Route::resource('item','ItemController');
    Route::resource('jual','JualController');
    Route::resource('beli','BeliController');
    Route::get('/beli/hapusbeli/{id}','BeliController@deletebeli')->name('hapus.beli');
    Route::get('/item/beli/{iditem}','BeliController@getbeli');
    Route::post('beli/simpan','BeliController@simpan')->name('beli.simpan');
    // Route::post('/jual/banyak/{id}','JualController@editbanyak')
    //     ->name('jual.banyak');
    Route::get('/jual/hapusjual/{id}','JualController@deletejual')->name('hapus.jual');
    Route::get('/item/jual/{iditem}','JualController@getjual');
    
    Route::get('/bayar','JualController@bayar')->name('jual.bayar');
    Route::get('/jual/kembali','JualController@kembali')->name('jual.kembali');
    Route::get('/batal','JualController@batal')->name('jual.batal');
    Route::post('jual/simpan','JualController@simpan')->name('jual.simpan');
    
    Route::get('contoh/list', "KasirController@juallist")->name("contoh.list");
    Route::resource('supplier','SupplierController');
    Route::resource('user','UserController');
    route::get('user/simpan','UserController@simpan')->name('user.simpan');
    
    Route::get('laporan/semua',"ReportController@semuareport")
        ->name("report.semua");
    Route::get('laporan/item',"ReportController@itemreport")
        ->name("report.item");
    Route::get('laporan/semuabeli',"ReportController@semuabelireport")
        ->name("report.semuabeli");
        Route::get('laporan/itembeli',"ReportController@itembelireport")
        ->name("report.itembeli");
});
Route::get("/register",function(){
    return view('register');
})->name("register")->middleware("guest");
Route::get("/login",function(){
    return view('login');
})->name("login")->middleware("guest");
