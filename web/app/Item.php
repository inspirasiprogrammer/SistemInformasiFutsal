<?php

namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table="tblitem";

    protected $fillable = ['nama','stok','jenis_id','satuan','jual','beli'];

    public function jenis()
    {
        return $this->belongsTo('App\jenis');
    }
    public function buktib()
    {
        return $this->hasMany('App\Buktib');
    }
}

