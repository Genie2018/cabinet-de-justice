<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
	 protected $fillable=['nom'];
	 protected $guarded='nature_id';
    
     public function actes(){
    	return $this->hasMany(\App\Acte::class);
    }	
}
 