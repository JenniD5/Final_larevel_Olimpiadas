<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complejos extends Model
{
    use HasFactory;

    public function eventos(){
        return $this->hasMany('App\Models\eventos');
    }
    
    public function subdivision(){
        return $this->hasMany('App\Models\Subdivision');
    }
}
