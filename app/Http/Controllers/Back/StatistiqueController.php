<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function stat_page()
    {
    	return view('admins.statistique');
    }
}
