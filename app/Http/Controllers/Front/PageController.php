<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home(){
   	   return view('pages.home');
   }

    public function espace_users(){
   	   return view('pages.espace-utilisateurs');
   }
}
