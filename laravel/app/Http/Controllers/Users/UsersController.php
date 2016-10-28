<?php namespace App\Http\Controllers\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
class UsersController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{   
		$user = new User();
		$allusers=$user->get_All_Users();
		return view('users.index', ['users' => $allusers]);
	}

	public function update_user(Request $request){
		 DB::table('users')
        ->where('id', $request['uid'])
        ->update(array('name' => $request['username'],'email'=>$request['useremail']));
	}

}
