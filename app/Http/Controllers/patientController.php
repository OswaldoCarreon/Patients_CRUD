<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class patientController extends Controller
{
    
    public function getAllPatients() {
        $res = Patient::orderBy('Lastname')->get(); //Hago la consulta a la base de datos a traves del modelo. All() = SELECT * FROM patients_t
        //error_log("Error log get all = ".$res);
        return view('patientsView', ["patients"=>$res]);
    }
    

    // -------------------------------- Crear ------------------------
    public function create() { return view('createPatientView'); }

    public function store(){
        $name = request("name");
        $lastname = request("lastname");
        $curp = request("curp");

        $newPatient = new Patient();
        $newPatient->Name = $name;
        $newPatient->Name = $name;
        $newPatient->Lastname = $lastname;
        $newPatient->CURP = $curp;

        $newPatient->save();
        return redirect('patients');
    }


    // ------------------------------- Mostrar por ID --------------------------
    public function show($id) { //Al dar clic en "See" en la lista de pacientes.
        $res = Patient::findOrFail($id);
        //error_log("Error log get by id = ".$res);
        return view('showPatientView', ["patient"=>$res]);
    }
    

    // ------------------------------ Actualizar por ID --------------------------
    public function updatePatientById($id) {// Al dar clic en "Modify" en la lisa de pacientes.
        $res = Patient::findOrFail($id);
        echo $res;
        return view('updatePatientView', ["patient"=>$res]);
    }

    public function put($id) {// Al dar clic en "Modify" en la lisa de pacientes.
        $name = request('name');
        $lastname = request('lastname');
        $curp = request('curp');

        Patient::where('id',$id)->update(['Name'=>$name, 'Lastname'=>$lastname,'CURP'=>$curp]);

        
        return redirect('/patients');
    }
    

    // ----------------------------- Eliminar por ID
    public function deletePatient($id){ //View and the question
        $res = Patient::findOrFail($id);
        return view('deleteConfirmationView', ["patient"=>$res]);
    }

    public function destroy($id) { //Al dar clic en "Delete" en la lista de pacientes.
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect('patients');
    }

}
