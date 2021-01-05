@extends('layouts.layout')


@section('content')

<div class="content">
    <h2>Are you sure you want to delete this patient from the list?</h2>

    <div class="patients-box">
        <p>Name of the patient: {{ $patient->Name }}</p>
        <p>Lastname of the patient: {{ $patient->Lastname }}</p>
        <p>CURP of the patient: {{ $patient->CURP }}</p>
        <p>Last update: {{ $patient->updated_at }}</p>
    </div>

    <div class="question">
        <form action="/patients/{{$patient->id}}" method="POST"> 
            @csrf
            @method("DELETE")
            <input type="submit" value="DELETE">
        </form>

        <a href="/patients">CACNEL</a>
    </div>
    
</div>

@endsection()