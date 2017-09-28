<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	 protected $guarded = ['id', 'created_at'];

   	 public function posts(){
		return $this->hasMany('App\Post');
	}
}
