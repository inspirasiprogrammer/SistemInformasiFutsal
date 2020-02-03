<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $table="tblbooking";

    protected $fillable = ['item_id','user_id','tanggal','lama','sesi','filename'];

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
    public function user()
    {
        return $this->belongsTo('App\Sifut');
    }
}
