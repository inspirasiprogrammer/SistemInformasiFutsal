<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sifut extends Model
{
    //
    protected $table = "users";

    protected $fillable = ["name","level","email","password"];

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
