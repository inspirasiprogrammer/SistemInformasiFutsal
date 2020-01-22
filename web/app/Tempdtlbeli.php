<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempdtlbeli extends Model
{
    //
    protected $table="tbltempdtlbeli";

    protected $fillable = ['item_id','qty','total'];

    
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
