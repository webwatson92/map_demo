<?php 
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function getDashboard()
	{
		return view('pages.index');
	}

	public function message()
	{
		return [
			'validation.required'=>"Vous devez entrer un titre.",
			'title.min'=>"Notre de charactère trop court!.",
		];
	}

	public function facebook()
	{
		return "ok";
	}

	public function postSignUp(Request $request)
	{
		$this->validate($request, [
				'name' =>  'bail|required|between:5,25|alpha',
				'email' => 'bail|required|email|unique:users',
				'password' => 'bail|required|min:6'
			]);

		$name = $request['name'];
		$email = $request['email'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->name = $name;
		$user->email = $email;
		$user->password = $password;

		$user->save();

		Auth::login($user);

		return redirect()->route('pages.index');
	}

	public function postSignIn(Request $request)
	{
		$this->validate($request, [
				'email' => 'required',
				'password' => 'required'
			]);
		//si les données sont ok on le redirige sur le dashboad sinon retour sur la meme page
		if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return view('pages.index');
		}
		return redirect()->back();
	}
}