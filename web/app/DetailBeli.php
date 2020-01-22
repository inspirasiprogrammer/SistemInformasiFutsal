<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBeli extends Model
{
    //
    protected $table="tbldtlbeli";

    protected $fillable = ['beli_id','item_id','qty','total'];

    public function beli()
    {
        return $this->belongsTo('App\Beli');
    }
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
