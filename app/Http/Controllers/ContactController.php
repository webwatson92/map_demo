<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
    	//La class ContactRequest gère le tratement puis retour ici pour continuer avec l'envoi du mail et passe la vue
    	Mail::to('administrateur@chezmoi.com')
            ->send(new Contact($request->except('_token')));
        return view('confirm');
    }
}
