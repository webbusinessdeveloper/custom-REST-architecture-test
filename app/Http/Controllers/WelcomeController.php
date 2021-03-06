<?php namespace App\Http\Controllers;

use App\Auth\Auth;
use App\Auth\AuthInternalService;
use App\Polymorphic\TraitConcrete;
use App\UserDirectory\User;
use App\UserDirectory\UserExternalService;
use Faker\Provider\DateTime;

class WelcomeController extends Controller
{

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




//
//		$attr = [
//			'email' => 'quickExternalTest@email.com',
//			'password' => 'testtest123456'
//		];
//
//		$userService = new UserExternalService();
//		dd(json_decode($userService->store($attr))->User->email);

	}

}
