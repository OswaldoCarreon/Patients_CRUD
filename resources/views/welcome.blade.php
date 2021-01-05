@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <div class="d-flex py-auto">
        
        <!-- <img class="" style="width:15%;" src="img/logo.png" alt="logo"> -->
        <h1 class="py-5 me-auto">No Mercy Hospital</h1>
        <a class="btn my-5 " style="height:1%;" href="">Iniciar sesion</a>
        <a class="btn my-5 " style="height:1%;" href="">Registrarse</a>
        
    </div>
    
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="/patients">See all patients</a>    
    </div>
   

</div>
@endsection

