@extends('layouts.layout')


@section('content')

<div class="patients">
    <div class="d-flex py-auto p-4">
        <h2 class="me-auto">All our patients</h2>
        <a class="btn mx-2"href="/">Home</a>
    
    </div>


    <a class="btn btn-secondary mx-4" href="patients/create">New patient</a> <br>

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CURP</th>
                    <th scope="col">LASTNAME</th>
                    <th scope="col">NAME</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
        
            <tbody>
                @foreach($patients as $patient)
                    <tr>
                        <th scope="row">{{$patient['CURP']}}</th>
                        <td>{{$patient->Lastname}}</td>
                        <td>{{$patient->Name}}</td>
                        <td><a class="btn btn-info" href="/patients/{{$patient->id}}"> See</a></td>
                        <td><a class="btn btn-warning" href="patients/{{$patient->id}}}/edit"> Modify </a></td>
                        <td><a class="btn btn-danger" href="patients/{{$patient->id}}}/delete"> Delete </a></td>
                    </tr>
                    
                @endforeach
            </tbody>


        </table>
    </div>


</div>

@endsection()