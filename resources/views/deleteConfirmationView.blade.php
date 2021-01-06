@extends('layouts.layout')


@section('content')

<div class="container p-5 mt-5">
    <h2>Are you sure you want to delete this patient from the list?</h2>

    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Name of the patient</th>
                <th scope="col">Lastname of the patient</th>
                <th scope="col">CURP of the patient</th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <!-- <th scope="row">{{$patient['Name']}}</th> -->
                <td >{{$patient->Name}}</td>
                <td>{{$patient->Lastname}}</td>
                <td>{{$patient->CURP}}</td>
            </tr>  
        </tbody>
    </table>


    <div class="d-flex mt-5 justify-content-center">
        <form action="/patients/{{$patient->CURP}}" method="POST"> 
            @csrf
            @method("DELETE")
            <input class="btn btn-success" type="submit" value="DELETE">
        </form>

        <a class="btn mx-2 btn-danger" href="/patients">CANCEL</a>
        
    </div>
    
</div>

@endsection()