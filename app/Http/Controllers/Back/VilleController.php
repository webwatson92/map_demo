<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Pays;
use App\Model\Ville;

class VilleController extends Controller
{
    //protected $fillable = ['name'];
   //affichager de ville
   public function admin_ville()
   {
   		$pay=Pays::all();
   		return view('admins/ajouter-ville', compact('pay'));  
   }
	//lister les villes
   public function listes_ville()
   {
   		$pays = Pays::with('villes')->get();
   		return view('admins/villes-listes', compact(['pays']));  
   }
   
   //ajout de ville
   public function ajouter_ville(Request $request)
   {	
        $this->validate($request, [
                'name' =>  'required',
                'pays_id' =>  'required',                
        ]);

        $name = $request['name'];
        $pays_id = $request['pays_id'];

        $ville = new Ville();
        $ville->name = $name;
        $ville->supprime = 0;
        $ville->pays_id = $pays_id;

        $ville->save();

        return redirect()->route('listes_ville');
   }

   public function modifier_ville_get($id)
   {
   		$mods=Ville::where('id', $id)->first();
   	   	return view('admins/modifier-ville', compact('mods'));  
   }

   public function update_ville_post(Request $request, $id)
   {
   		$this->validate($request, [
                'name' => 'bail|required',
        ]);

        $listes=Ville::findOrFail($id);
        //dd($listes);
        $listes->update([
                'name' => $request->name
        ]);
        
        return redirect()->route('listes_ville');
   }

   //Suppression de la ville
    public function supprimer_ville($id)
    {    
           $sup= Ville::where('id', $id)->first();
           $sup->delete();
           return redirect()->route('listes_ville')->with(['message'=>'Pays supprimé avec succès!']);   
    }


}
