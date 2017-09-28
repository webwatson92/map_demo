<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	//un contact appartient a une et une seule ecole
    public function Ecoles(){
		return $this->belongsTo('App\Ecole');
	}
}
