<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
get('/', array('as' => 'index', 'uses' => 'Frontend\IndexController@index'));
get('admin/login', array('as' => 'admin/login', 'uses' => 'Auth\AuthController@getLogin'));
get('users', array('as' => 'users', 'uses' => 'Users\UsersController@index'));
get('employees', array('as' => 'employees', 'uses' => 'Employees\EmployeesController@index'));
get('addemployee',array('as'=>'addemployee','uses' => 'Employees\EmployeesController@add_employee'));
post('addemployeedetails',array('as'=>'addemployeedetails','uses'=>'Employees\EmployeesController@add_employee_details'));
get('updateemployee/{id}', array('as' => 'updateemployee/{id}', 'uses' => 'Employees\EmployeesController@update_employee'));
post('updateemployeedetails',array('as'=>'updateemployeedetails','uses'=>'Employees\EmployeesController@update_employee_details'));
post('updateuser', array('as' => 'updateuser', 'uses' => 'Users\UsersController@update_user'));
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

