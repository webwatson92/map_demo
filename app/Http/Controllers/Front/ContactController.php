<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Contact;

class ContactController extends Controller
{
    public function index()
    {
		return view('pages.contact');
    }

    public function store(Request $request)
    {
    		 //var_dump($request);die();
        $this->validate($request, [
                'name' =>  'bail|required|between:5,25|alpha',
                'email' => 'bail|required',
                'message' => 'bail|required|between:1,200'
        ]);

        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];

        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;

        $contact->save();

        return redirect()->route('contact');
    }

    public function create()
    {

    }
}
