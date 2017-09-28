<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Filiere;
use App\Model\Ecole;

class FiliereController extends Controller
{
	//affichage de la liste des filières
    public function listes_filiere()
    {
    	$listes=Filiere::all();
        //($listes);
        return view('admins/filieres-listes', compact('listes')); 
    }
    
	//Ajout get des filières
    public function admin_filiere()
    {
    	//$filieres=Filiere::All();
    	$ecole = Ecole::with('filieres')->get();
        return view('admins/ajouter-filiere', compact('ecole')); 
    }

     //Ajout en post du pays
    public function ajouter_filiere(Request $request)
    {       
        //var_dump($request);die();
        $this->validate($request, [
                'nom_ecole' =>  'bail|required',
                'id_ecole' => 'bail|required',
        ]);

        $nom_ecole = $request['nom_ecole'];
        $id_ecole = $request['id_ecole'];

        $filiere = new Filiere();
        $filiere->nom_ecole = $nom_ecole;
        $filiere->id_ecole = $id_ecole;

        $filiere->save();

        return redirect()->route('listes_filiere');
    }
    
    //Suppression du pays
    public function supprimer_pays($id)
    {    
           $sup= Filiere::where('id', $id)->first();
           $sup->delete();
           return redirect()->route('listes_filiere')->with(['message'=>'Filière supprimé avec succès!']);   
    }
}
