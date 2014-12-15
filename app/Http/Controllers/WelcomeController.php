<?php namespace App\Http\Controllers;

use App\Polymorphic\TraitConcrete;
use App\UserDirectory\User;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');

//		$trait = new TraitConcrete();
//		$user = new User();
//
//		dd($trait->dataIsUnique('tanya.reichert@yahoo.com', 'email', $user->getClassName()));

//		$trait = new TraitConcrete();
//
//		$user = $trait->createNewModel('\App\UserDirectory\User');
//
//		dd($user);










	}

}
