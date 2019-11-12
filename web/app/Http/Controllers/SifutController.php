<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SifutController extends Controller
{
    //
    
    public function listakun(){
        // return view("admin.list",[
        //     "data"=>[
        //         "nama" => "kasir",
        //         "username" => "kasir",
        //         "level" => "kasir",
        //         "email" => "kasir"
        //     ],
        //     [
        //         "nama" => "admin",
        //         "username" => "admin",
        //         "level" => "admin",
        //         "email" => "admin"
        //     ]
        // ]);
        return view("admin.list");
      
    }
    public function dashboard(){
        return view("karyawan.dashboard");
    }
    public function formakun(){
        return view("admin.form");
    }
}
