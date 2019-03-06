<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acte extends Model
{
    protected $table="actes";
      protected $fillable=[
    	'description',
        'requerant',
        'requis',
        'prix',
    	'user_id',
    	


    ];
      public function nature(){
    	//Chaque ticket depend d'une priorite
    	return $this->belongsTo(\App\Nature::class);
    }
    public function user(){
    	//Chaque ticket depend d'une priorite
    	return $this->belongsTo(\App\User::class);
    }
}
