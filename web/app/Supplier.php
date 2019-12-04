<?php

namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table="tblsupplier";

    protected $fillable = ['nama','alamat','telepon'];
}
