<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    //
    protected $table = "tbljual";

    protected $fillable = ['user_id','tanggal','jumlah'];

    public function detailjual()
    {
        return $this->hasMany('App\DetailJual');
    }
}
