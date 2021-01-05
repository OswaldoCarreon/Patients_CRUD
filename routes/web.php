<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientController;

Route::get('/', function () { return view('welcome'); }); // Home view

Route::get('patients', 'patientController@getAllPatients');  //get all action (Done)

// --------------------- CREATE -----------------
Route::get('patients/create','patientController@create'); //create a patient view (Done)
Route::post('patients', 'patientController@store');  //Store the patient action with no view (Done)

// --------------------- READ -----------------
Route::get('patients/{id}', 'patientController@show'); // get patient by id action (Done)

// --------------------- DELETE -----------------
Route::get('patients/{id}/delete', 'patientController@deletePatient'); //confirmation view (done)
Route::delete('patients/{id}', 'patientController@destroy'); //delete patient action with no view (Done)

// --------------------- UPDATE -----------------
Route::get('patients/{id}/edit', 'patientController@updatePatientById'); // update view (Done)
Route::post('patients/{id}', 'patientController@put'); //update action with no view (Done)




