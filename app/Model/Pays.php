<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
  	protected $guarded = ['population'];
	// un pays appartient a un et plusieurs ecoles
    public function ecole()
    {
		return $this->hasMany('App\Model\Ecole');
	}

	// une pays appartient a une et une seule ville
	public function villes()
	{
		return $this->hasMany('App\Model\Ville');
	}

}
