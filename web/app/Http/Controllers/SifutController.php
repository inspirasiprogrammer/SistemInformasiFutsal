<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SifutController extends Controller
{
    //
    public function home(){
        return view("home");
    }
    public function login(){
        return view("login");
    }
    public function simpanlogin(Request $request){
        
        if ($request->input('username') == "kasir" && $request->input('password') == "kasir") {
            return redirect()->route('home');
    
        } else if ($request->input('username') == "admin" && $request->input('password') == "admin") {
            return redirect()->route('home');
        }
        
    }
}
