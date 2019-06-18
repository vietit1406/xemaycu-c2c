<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietdonhang extends Model
{
    protected $table = "chitietdonhang";

    public function donhang(){
    	return $this->belongsTo('App\Donhang','madh','mactdh');
    }

    public function tin(){
    	return $this->hasOne('App\Tin','matin','mactdh');
    }
}
