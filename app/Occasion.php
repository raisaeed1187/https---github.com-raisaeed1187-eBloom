<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    public function products(){
        return $this->hasMany('App\Products');
    }
}
