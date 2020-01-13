<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buktia extends Model
{
    protected $table="tblbuktia";

    protected $fillable = ['lapa_id','user_id','filename','lama','sesi'];

    public function lapa()
    {
        return $this->belongsTo('App\Lapa');
    }
    public function sifut()
    {
        return $this->belongsTo('App\Sifut');
    }

}
