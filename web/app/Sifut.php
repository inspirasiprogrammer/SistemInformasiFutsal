<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sifut extends Model
{
    //
    protected $table = "users";

    protected $fillable = ["nama","level","email","password"];
}
