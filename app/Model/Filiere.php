<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Ecole;

class Filiere extends Model
{
	protected $fillable= ['deleted_at'];
	//une fillière à plusieurs ecole
    public function ecoles(){
		return $this->belongToMany(Ecole::class);
	}
}
