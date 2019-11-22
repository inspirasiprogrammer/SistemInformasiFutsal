<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table="tbljenis";

    protected $fillable = ['nama'];
}
