@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <div class="d-flex py-auto">
        
        <!-- <img class="" style="width:15%;" src="img/logo.png" alt="logo"> -->
        <h1 class="py-5 me-auto">No Mercy Hospital</h1>

        @if( session('username') )
            <a class="btn my-5 " style="height:1%;" href="">{{ session('username') }}</a>
            <a class="btn my-5 " style="height:1%;" href="/logout">Log out</a>
        @else
            <a class="btn my-5 " style="height:1%;" href="">Log in</a>
            <a class="btn my-5 " style="height:1%;" href="">Sign up</a>
        @endif
        
    </div>
    
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="/patients">See all patients</a>    
    </div>
   

</div>
@endsection

