<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapanganController extends Controller
{
    //
    public function lapanganlist(){
        return view("lapangan.list");
    }
    public function lapanganform(){
        return view("lapangan.form");
    }
}
