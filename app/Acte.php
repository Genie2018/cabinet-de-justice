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
    	'nature_id'


    ];
      public function nature(){
    	//Chaque Acte depend de la nature
    	return $this->belongsTo(\App\Nature::class); //belongsTo c'est pour les clées etrangeres
    }
    public function user(){
    	//Chaque Acte depend de l'utilisateur
    	return $this->belongsTo(\App\User::class);
    }
}
