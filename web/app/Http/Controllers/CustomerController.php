<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function customerlist(){
        return view("customer.list");
    }
    public function customerform(){
        return view("customer.form");
    }
}
