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
            return view("admin.dashboard",compact("data"));
        }else{
            return view('dashboard');
        }
        
    })->name("home");

    
    Route::get('/admin/form', function(){
        return view('admin.form');
    })->name("admin.form");
    Route::get('/admin/list', function(){
        return view('admin.list');
    })->name("admin.list");
    Route::get('/contoh', function(){
        return view('penjualan.contoh');
    })->name("contoh");
    Route::get('/admin/contoh', function(){
        return view('admin.penjualan.contoh');
    })->name("admin.contoh");
    Route::get('/booking', function(){
        return view('penjualan.booking');
    })->name("booking");
    Route::get('/admin/booking', function(){
        return view('admin.penjualan.booking');
    })->name("admin.booking");
    Route::resource('jenis','jeniscontroller');

    Route::get('lapangan/list', "LapanganController@lapanganlist")->name("lapangan.list");
    Route::get('lapangan/form', "LapanganController@lapanganform")->name("lapangan.form");
    Route::get('sewa', "LapanganController@sewa")->name("sewa");

    Route::get('/admin/sewa', function(){
        return view('admin.sewa.form');
    })->name("admin.lapangan.sewa");

    Route::get('jual/list', "KasirController@juallist")->name("jual.list");
    Route::get('jual/form', "KasirController@jualform")->name("jual.form");
    Route::get('jual/bayar', "KasirController@jualbayar")->name("jual.bayar");

    Route::get('/admin/jual/list', function(){
        return view('admin.penjualan.list');
    })->name("admin.jual.list");
    Route::get('/admin/jual/form', function(){
        return view('admin.penjualan.detail');
    })->name("admin.jual.form");
    Route::get('/admin/jual/bayar', function(){
        return view('admin.penjualan.bayar');
    })->name("admin.jual.bayar");

    Route::get('beli/list', "KasirController@belilist")->name("beli.list");
    Route::get('beli/form', "KasirController@beliform")->name("beli.form");

    Route::get('/admin/beli/list', function(){
        return view('admin.pembelian.list');
    })->name("admin.beli.list");
    Route::get('/admin/beli/form', function(){
        return view('admin.pembelian.form');
    })->name("admin.beli.form");

    Route::resource('item','ItemController');

    Route::get('/admin/item/list', function(){
        return view('admin.item.list');
    })->name("admin.item.list");
    Route::get('/admin/item/form', function(){
        return view('admin.item.form');
    })->name("admin.item.form");

    Route::get('customer/list', "CustomerController@customerlist")->name("customer.list");
    Route::get('customer/form', "CustomerController@customerform")->name("customer.form");

    Route::get('/laporan/tahunan', function(){
        return view('admin.laporan.tahunan');
    })->name("laporan.tahunan");
    Route::get('/laporan/bulanan', function(){
        return view('admin.laporan.bulanan');
    })->name("laporan.bulanan");
    Route::get('/laporan/harian', function(){
        return view('admin.laporan.harian');
    })->name("laporan.harian");
    Route::get('/laporan/jam', function(){
        return view('admin.laporan.jam');
    })->name("laporan.jam");
    Route::get('/laporan/detail', function(){
        return view('admin.laporan.detail');
    })->name("laporan.detail");

});

Route::get("/register",function(){
    return view('register');
})->name("register")->middleware("guest");

Route::get("/login",function(){
    return view('login');
})->name("login")->middleware("guest");
