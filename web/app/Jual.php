<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    //
    protected $table = "tbljual";

    protected $fillable = ['user_id','tanggal','jumlah'];

    public function user()
    {
        return $this->belongsTo('App\Sifut');
    }

    public function detailjual()
    {
        return $this->hasMany('App\DetailJual');
    }
    public function jenisbayar()
    {
        return $this->hasMany('App\Jenisbayar');
    }
}
