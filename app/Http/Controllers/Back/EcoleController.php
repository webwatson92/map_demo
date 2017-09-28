<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Ecole;
use App\Model\Ville;

class EcoleController extends Controller
{
  // protected $filable = [];
   //Affichage des ecoles sur la liste des ecoles
   public function listes_ecole()
   {
   		//$ecoles=Ecole::all();
   	   		$ecoles = Ecole::with(['villes', 'pays'])->get();
   	   		//dd($ecoles);
    	   return view('admins/ecoles-listes', compact("ecoles"));
   } 

   public function admin_ecole()
   {
   		$ecoles=Ecole::all();
    	return view('admins/ajouter-ecoles');
   }
   public function ajouter_ecole(Request $request)
   {
   		 
        //var_dump($request);die();
        $this->validate($request, [
                'nom_ecole' =>  'bail|required',
                'categorie_ecole' => 'bail|required',
                'lattitude' => 'bail|required',
                'longitude' => 'bail|required',
                'site_internet' =>'bail|required',
                'ville_id' => 'bail|required',
                'pays_id' => 'bail|required',
        ]);

        $nom_ecole = $request['nom_ecole'];
        $categorie_ecole = $request['categorie_ecole'];
        $lattitude = $request['lattitude'];
        $longitude = $request['longitude'];
        $site_internet = $request['site_internet'];
        $ville_id = $request['ville_id'];
        $pays_id = $request['pays_id'];


        $ecoles = new Ecole();
        $ecoles->nom_ecole = $nom_ecole;
        $ecoles->categorie_ecole = $categorie_ecole;
        $ecoles->lattitude = $lattitude;
        $ecoles->longitude = $longitude;
        $ecoles->site_internet = $site_internet;
        $ecoles->supprime = 0;
        $ecoles->ville_id = $ville_id;
        $ecoles->pays_id = $pays_id;

        $ecoles->save();

    	return view('admins/ecoles-listes', compact('ecoles'));
   }

   //accueil de la modification
   public function update_ecole_get($id)
   {
   		  $mods=Ecole::where('id', $id)->first();
   	   	return view('admins/modifier-ecole', compact('mods'));  
   }

   	//Modification des ecoles
    public function update_ecole_post(Request $request, $id)
    {
   		$this->validate($request, [
                'site_interet' => 'bail|required',                
        ]);
       
 		    $ecoles=Ecole::findOrFail($id);
        //dd($listes);
        $ecoles->update([
		        'site_interet'=>$request->site_interet
        ]);
        return redirect()->route('listes_ecole', compact('ecoles'));
    }

     //Suppression de l'école
    public function supprimer_ecole($id)
    {
          $sup= Ecole::where('id', $id)->first();
          $sup->delete();
          return redirect()->route('listes_ecole')->with(['message'=>'Ecole supprimé avec succès!']);  
    }

   
}
