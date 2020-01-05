<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisbayar extends Model
{
    //
    protected $table="tbljenisbayar";

    protected $fillable = ['jual_id','jenis','jlh'];

    public function jual()
    {
        return $this->belongsTo('App\Jual');
    }
}
