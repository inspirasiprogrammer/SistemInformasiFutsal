<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    //
    protected $table = "tblbeli";

    protected $fillable = ['supplier_id','tanggal','jumlah'];

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function detailbeli()
    {
        return $this->hasMany('App\DetailBeli');
    }
}
