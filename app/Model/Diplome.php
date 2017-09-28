<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
	//un diplome appartient à une ou plsuieurs écoles
    public function ecoles(){
		return $this->hasMany('App\Ecole');
	}
}
