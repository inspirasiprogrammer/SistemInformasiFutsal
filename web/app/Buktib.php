<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buktib extends Model
{
    protected $table="tblbuktib";

    protected $fillable = ['lapb_id','user_id','filename','lama','sesi'];

    public function lapa()
    {
        return $this->belongsTo('App\Lapa');
    }
    public function sifut()
    {
        return $this->belongsTo('App\Sifut');
    }
}