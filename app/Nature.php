<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
	 protected $fillable=['nom'];
	 
    
     public function actes(){
    	return $this->hasMany(\App\Acte::class); //hasmany c'est pour les clées primaires
    }	
}
 