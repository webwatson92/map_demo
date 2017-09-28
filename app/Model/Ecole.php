<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecole extends Model
{
	protected $fillable= ['nom_ecole', 'deleted_at'];
	//protected $timestamp = false;
	//une ecole a plusieurs filière
    public function filiere(){
		return $this->belongToMany('App\Model\Filiere');
	}

	//une ecole appartient a un et un seule pays
	public function pays(){
		return $this->belongsTo('App\Model\Pays');
	}

	public function villes(){
		return $this->belongsTo('App\Model\Ville');
	}
	//une ecole a plusieurs diplomes
	public function diplomes(){
		return $this->hasMany('App\Model\Diplome');
	}

	//une ecole a plusieurs contats
	public function contact(){
		return $this->hasMany('App\Model\Contact');
	}
}
