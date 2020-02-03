<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Sifut extends Model
{
    //
    protected $table = "users";

    protected $fillable = ["name","level","email","password"];

    public function setPasswordAttribute($value){
        $this->attributes["password"] = Hash::make($value);
    }

    public function getNamaLevelAttribute(){
        $namalevel = "";
        switch ($this->level){
            case 'a':
                $namalevel = "Admin";
                break;
            case 'k':
                $namalevel = "Kasir";
                break;
            case 'c':
                $namalevel = "Customer";
                break;
            case 'm':
                $namalevel = "Manajer";
                break;
            default:
                $namalevel="NA";
                break;
        }

        return $namalevel;
    }
}
