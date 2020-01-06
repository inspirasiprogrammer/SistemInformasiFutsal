<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBeli extends Model
{
    //
    protected $table="tbldetailjual";

    protected $fillable = ['jual_id','item_id','qty','total'];

    public function jual()
    {
        return $this->belongsTo('App\Jual');
    }
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
