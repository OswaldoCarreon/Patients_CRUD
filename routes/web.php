<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientController;
use App\Http\Controllers\loginController;

Route::get('/', function () { return view('homeView'); }); // Home view
//Route::get('/', function () { return view('welcome'); }); // Home view

// --------------------------------------------------------------------------------------------------
// ------------------------------------------ Log in Roues ----------------------------------------
// --------------------------------------------------------------------------------------------------
Route::get('login', 'loginController@login');
Route::post('login/auth','loginController@loginAuth');


Route::get('signup', 'loginController@signup');




// --------------------------------------------------------------------------------------------------
// ------------------------------------------ Patients Roues ----------------------------------------
// --------------------------------------------------------------------------------------------------

Route::get('patients', 'patientController@getAllPatients');  //get all action (Done)

// --------------------- CREATE -----------------
Route::get('patients/create','patientController@create'); //create a patient view (Done)
Route::post('patients', 'patientController@store');  //Store the patient action with no view (Done)

// --------------------- READ -----------------
Route::get('patients/{curp}', 'patientController@show'); // get patient by id action (Done)

// --------------------- DELETE -----------------
Route::get('patients/{curp}/delete', 'patientController@deletePatient'); //confirmation view (done)
Route::delete('patients/{curp}', 'patientController@destroy'); //delete patient action with no view (Done)

// --------------------- UPDATE -----------------
Route::get('patients/{curp}/edit', 'patientController@updatePatientById'); // update view (Done)
Route::post('patients/{curp}', 'patientController@put'); //update action with no view (Done)




