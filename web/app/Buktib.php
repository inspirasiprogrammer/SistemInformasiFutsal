<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buktib extends Model
{
    protected $table="tblbuktib";

    protected $fillable = ['lapb_id','user_id','item_id','filename','lama','sesi'];

    public function lapb()
    {
        return $this->belongsTo('App\Lapb');
    }
    public function sifut()
    {
        return $this->belongsTo('App\Sifut');
    }
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}