<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    //
    public function itemlist(){
        return view("item.list");
    }
    public function itemform(){
        return view("item.form");
    }
    public function trandashboard(){
        return view("transaksi.dashboard");
    }
    public function juallist(){
        return view("penjualan.list");
    }
    public function jualform(){
        return view("penjualan.detail");
    }
    public function jualbayar(){
        return view("penjualan.bayar");
    }
    public function belilist(){
        return view("pembelian.list");
    }
    public function beliform(){
        return view("pembelian.form");
    }
}
