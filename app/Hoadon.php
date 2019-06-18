<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    protected $table = "hoadon";

    public function users(){
    	return $this->belongsTo('App\User','matv','mahd');
    }
}
