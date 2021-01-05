@extends('layouts.layout')


@section('content')

<div class="container p-5 mt-5">
   

    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Name of the patient</th>
                <th scope="col">Lastname of the patient</th>
                <th scope="col">CURP of the patient</th>
                <th scope="col">Last update</th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <!-- <th scope="row">{{$patient['Name']}}</th> -->
                <td>{{$patient->Name}}</td>
                <td>{{$patient->Lastname}}</td>
                <td>{{$patient->CURP}}</td>
                <td>{{$patient->updated_at}}</td>
            </tr>  
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-5">
        <a class="btn btn-secondary" href="/patients">Back</a>
        <a class="mx-2 btn" href="/">Home</a>
    </div>
    
</div>

@endsection()