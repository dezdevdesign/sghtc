<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::middleware('auth')->group(function () {
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'Auth\RegisterController@register');
});

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware('auth')->group(function() {
	//Home Routes...
	Route::get('home', 'HomeController@index')->name('home');

	//Workbench Routes...
	Route::get('/workbench', 'AppointmentsController@todayAppointed');
	Route::get('/allAppointed', 'AppointmentsController@allAppointed');
	Route::get('/appointment/{appointment}', 'AppointmentsController@viewRecord');
	Route::get('/appointment/{appointment}/edit', 'AppointmentsController@edit');

	Route::put('/soap/{appointment}', 'SoapsController@update');

	//Patient Routes...
	Route::get('/patients/create', 'PatientsController@create');
	Route::get('/patients/list', 'PatientsController@index');
	Route::post('/patients/createNew', 'PatientsController@storeNew');
	Route::post('/patients/createOld', 'PatientsController@storeOld');
	Route::get('/api/loadPatientSelect', function() {
		return DB::table('patients')->select('id AS id', DB::raw('CONCAT(last_name, ", ", first_name, " ", middle_name) as text'))->get();
	});
	Route::get('/api/loadPatientInformation/{patient}', function($patient_id) {
		return \App\Patient::where('id', $patient_id)->get()->first();
	});

	//User Routes...
	Route::get('/users', 'UsersController@index');
	Route::post('/users', 'UsersController@store');
	Route::get('/users/{user}/edit', 'UsersController@edit');
	Route::put('/users/{user}', 'UsersController@update');
	Route::get('/api/loadDoctorSelect', function() {
		return DB::table('users')->join('departments', 'departments.id', '=', 'users.department_id')->select('users.id AS id', DB::raw('CONCAT(users.name, " - ", departments.name) AS text'))->where('role_id', 2)->get();
	});

	//Role Routes...
	Route::get('/api/loadRoleSelect', function() {
		return DB::table('roles')->select('id AS id', 'name AS text')->where('name', '!=', 'Admin')->get();
	});

	//Department Routes...
	Route::get('/departments', 'DepartmentsController@index');
	Route::post('/departments', 'DepartmentsController@store');
	Route::get('/departments/{department}/edit', 'DepartmentsController@edit');
	Route::put('/departments/{department}', 'DepartmentsController@update');
	Route::get('/api/loadDepartmentSelect', function() {
		return DB::table('departments')->select('id AS id', 'name AS text')->get();
	});

	//Address Routes...
	Route::get('/api/provinces', 'ProvincesController@loadProvinces');
	Route::get('/api/cities/{provinces}', 'CitiesController@loadCities');
	Route::get('/api/barangays/{cities}', 'BarangaysController@loadBarangays');
});