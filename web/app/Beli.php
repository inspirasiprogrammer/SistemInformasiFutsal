<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    //
    protected $table = "tblbeli";

    protected $fillable = ['supplier_id','tanggal','total','kwitansi'];

    public function user()
    {
        return $this->belongsTo('App\Sifut');
    }

    public function detailbeli()
    {
        return $this->hasMany('App\DetailBeli');
    }
}
