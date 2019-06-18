<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    protected $table = "donhang";

    

    public function users(){
    	return $this->belongsTo('App\User','matv','madh');
    }

    public function tin(){
    	return $this->hasOne('App\Tin','matin','madh');
    }

    
}
