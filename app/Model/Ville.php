<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
	protected $fillable= ['name'];

	// une ville appartient a un et un seule pays
    public function pays(){
		return $this->belongsTo('App\Model\Pays');
	}

	// une ville a plusieurs ecole
    public function ecoles(){
		return $this->hasMany('App\Model\Ecole');
	}
}
