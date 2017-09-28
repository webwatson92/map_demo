<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Pays;
use DB;

class AdminController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

    public function index()
    {

    }

    public function login_admin()
    {   	
    		return view('admins.index'); 
    }

    public function message()
    {
            return [
                'validation.required'=>"Vous devez entrer un titre.",
                'title.min'=>"Notre de charactère trop court!.",
            ];
    } 

    public function connexion(Request $request)
    {
        dd($request);
        $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);
        //si les données sont ok on le redirige sur le dashboad sinon retour sur la meme page
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('admins.dashboard');
        }
        return redirect()->back();
    }

    public function dashboard()
    {   	
        $users = DB::table('users')->paginate(7);
    	return view('admins/dashboard', compact('users'));
    }

    //ajout en get du pays
    public function admin_pays()
    {       
            return view('admins/ajouter-pays');  
    }

    public function listes_pays()
    {       
            $listes=Pays::all();
            //($listes);
            return view('admins/pays-listes', compact('listes')); 
    }
    //Ajout en post du pays
    public function ajouter_pays(Request $request)
    {       
        //var_dump($request);die();
        $this->validate($request, [
                'name' =>  'bail|required|between:5,25|alpha',
                'image_pays' => 'bail|required',
                'population' => 'bail|required',
                'capital' => 'bail|required',
                'superficie' =>'bail|required',
                'situation_economique' => 'bail|required',
        ]);

        $name = $request['name'];
        $image_pays = $request['image_pays'];
        $population = $request['population'];
        $capital = $request['capital'];
        $superficie = $request['superficie'];
        $situation_economique = $request['situation_economique'];

        $pays = new Pays();
        $pays->name = $name;
        $pays->image_pays = $image_pays;
        $pays->population = $population;
        $pays->capital = $capital;
        $pays->superficie = $superficie;
        $pays->situation_economique = $situation_economique;

        $pays->save();

        return redirect()->route('listes_pays');
    }
    public function modifier_pays_get($id)
    {       
          $mods=Pays::where('id', $id)->first();
          return view('admins/modifier-pays', compact('mods')); 
    }
    public function update_pays_post(Request $request, $id)
    {       
        $this->validate($request, [
                'population' => 'bail|required',
                'superficie' =>'bail|required',
                'situation_economique' => 'bail|required',
        ]);

        $listes=Pays::findOrFail($id);
        //dd($event);
        $listes->update([
                'population' => $request->population,
                'superficie' => $request->superficie,
                'situation_economique' => $request->situation_economique
        ]);
       
        return redirect()->route('listes_pays', compact('listes'));
        //return view('admins/pays-listes'); 
    }
    //Suppression du pays
    public function supprimer_pays($id)
    {    
           $sup= Pays::where('id', $id)->first();
           $sup->delete();
           return redirect()->route('listes_pays')->with(['message'=>'Pays supprimé avec succès!']);   
    }
    //function pour le traitement d'ajout pays 
}
