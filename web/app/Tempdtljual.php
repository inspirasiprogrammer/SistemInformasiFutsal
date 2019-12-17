<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempdtljual extends Model
{
    //
    protected $table="tbltempdtljual";

    protected $fillable = ['jual_id','item_id','qty','total'];

    public function jual()
    {
        return $this->belongsTo('App\Tempjual');
    }
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
