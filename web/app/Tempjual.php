<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempjual extends Model
{
    protected $table = "tbltempjual";

    protected $fillable = ['user_id','jumlah'];

    public function user()
    {
        return $this->belongsTo('App\Sifut');
    }

    public function detailjual()
    {
        return $this->hasMany('App\Tempdtljual');
    }
}
