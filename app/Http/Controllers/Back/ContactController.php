<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 

use App\Model\Contact;

class ContactController extends Controller
{
    public function message()
    {
        $messages= DB::table('contacts')->paginate(5);
		return view('admins.message', compact('messages'));
    }

    public function store(Request $request)
    {
    }

    public function create()
    {

    }
}
