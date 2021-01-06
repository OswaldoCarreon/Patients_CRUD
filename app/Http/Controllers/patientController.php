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
        $newPatient->Lastname = $lastname;
        $newPatient->CURP = $curp;

        $newPatient->save();
        return redirect('patients');
    }


    // ------------------------------- Mostrar por ID --------------------------
    public function show($curp) { //Al dar clic en "See" en la lista de pacientes.
        $res = Patient::where('CURP',$curp)->first();

        if(!is_null($res)) return view('showPatientView', ["patient"=>$res]);
    
        echo "Not found | 404";
    }
    

    // ------------------------------ Actualizar por ID --------------------------
    public function updatePatientById($curp) {// Al dar clic en "Modify" en la lisa de pacientes.
        $res = Patient::where('CURP',$curp)->first();

        if( !is_null($res) )    return view('updatePatientView', ["patient"=>$res]);

        echo "Not found | 404";
    }

    public function put($curp) {// Al dar clic en "Edit" en la info del paciente.
        $name = request('name');
        $lastname = request('lastname');
        $curp = request('curp');

        Patient::where('CURP',$curp)->update(['Name'=>$name, 'Lastname'=>$lastname,'CURP'=>$curp]);

        
        return redirect('/patients');
    }
    

    // ----------------------------- Eliminar por ID
    public function deletePatient($curp){ //View and the question
        $res = Patient::where('CURP',$curp)->first();

        if( !is_null($res) )    return view('deleteConfirmationView', ["patient"=>$res]);

        echo "Not found | 404";
    }

    public function destroy($curp) { //Al dar clic en "Delete" en la lista de pacientes.
        $patient = Patient::where('CURP',$curp)->first();

        if( !is_null($patient) )    $patient->delete();

        return redirect('patients');
    }
    
}
