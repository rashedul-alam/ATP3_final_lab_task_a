<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //Protected $table = "PRODUCTS";
    //public Timestaps =false
    public function user(){
        return $this->belongsTo('App\User');
    }
}
