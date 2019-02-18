<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
	
    protected $table='natures';
     public function actes(){
    	return $this->hasMany(\App\Acte::class);
    }	
}
 