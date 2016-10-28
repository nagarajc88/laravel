<?php namespace App\Http\Controllers\Employees;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Employee;
use DB;
class EmployeesController extends Controller {

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
		$user = new Employee();
		$allusers=$user->get_All_Employee();
		$currentPage = LengthAwarePaginator::resolveCurrentPage();
		$col = new Collection($allusers);
		$perPage = 5;
		$currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
		$entries = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);
		return view('employees.index', ['employees' => $entries]);
	}

	public function update_employee($id){
      $emp_row=Employee::find($id);
      return view('employees.edit',['emp_row'=>$emp_row]);
	}

	public function add_employee(){
		return view('employees.add');
	}

	public function add_employee_details(Request $request){
		$add_emp=new Employee;
		$add_emp->name=$request['emp-name'];
		$add_emp->email=$request['emp-email'];
		$add_emp->age=$request['emp-age'];
		$add_emp->dob=$request['emp-dob'];
		$add_emp->mobile=$request['emp-mobile'];
		$add_emp->description=$request['emp-area'];
        $destinationPath = 'public/images'; // upload path
        $extension = Input::file('emp-image')->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        Input::file('emp-image')->move($destinationPath, $fileName);
        $add_emp->image=$fileName;
		$add_emp->save();
		return Redirect::to('employees');
	}
	public function update_employee_details(Request $request){
		$file=$request->input('emp-image');
		$destinationPath = 'public/images'; // upload path
        $extension = Input::file('emp-image')->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        Input::file('emp-image')->move($destinationPath, $fileName);

		   Employee::where('id', $request['empid'])->update(array(
            'name'    =>  $request['emp-name'],
            'email' =>  $request['emp-email'],
            'age'  => $request['emp-age'],
            'dob' => $request['emp-dob'],
            'mobile' => $request['emp-mobile'],
            'description' => $request['emp-area'],
            'image' => $fileName
        ));
		return Redirect::to('employees');
	}

}
