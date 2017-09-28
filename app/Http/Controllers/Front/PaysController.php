<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Pays;
use DB;

class PaysController extends Controller
{
   public function index()
   {
   	 $pays = DB::table('pays')->paginate(10);
   	 return view('pages.pays', compact('pays'));
   	 //dd($pays);	
   }
}
