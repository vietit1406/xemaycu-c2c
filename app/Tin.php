<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    protected $table = "tin";

    public function users(){
    	return $this->belongsTo('App\User','matv','matin');
    }

    

    public function donhang(){
    	return $this->belongsTo('App\Donhang','matin','matin');
    }
}
