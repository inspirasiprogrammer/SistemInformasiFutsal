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
    
}
