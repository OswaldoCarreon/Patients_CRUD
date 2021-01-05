@extends('layouts.layout')


@section('content')

<div class="content">
    <h2>{{$patient->Name. " " . $patient->Lastname}}</h2>


    <div class="patients-box">
        <p>Name of the patient: {{ $patient->Name }}</p>
        <p>Lastname of the patient: {{ $patient->Lastname }}</p>
        <p>CURP of the patient: {{ $patient->CURP }}</p>
        <p>Last update: {{ $patient->updated_at }}</p>
    </div>

    <a href="/patients">Back</a>
    <a href="/">Home</a>
</div>

@endsection()