@extends('layouts.layout')


@section('content')

<div class="container p-5">

    <h2>Edit patient</h2>

    <form class="p-5 needs-validation" action="/patients/{{$patient->id}}" method="POST">
        @csrf
        <!-- <label for="name">Name</label>
        <input type="text" name="name" placeholder="name"> <br> -->

        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" name="name" value="{{$patient->Name}}" placeholder="name" required>
            <label for="floatingInput" >Name</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="lastname" value="{{$patient->Lastname}}" placeholder="lastname" required>
            <label for="floatingPassword">Lastname</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="curp" value="{{$patient->CURP}}" placeholder="curp" required>
            <label for="floatingPassword">CURP</label>
        </div>  


        <div class="d-flex mt-5 justify-content-center">
            <input class="btn btn-success "type="submit" value="Edit patient">
            <a class="mx-2 btn btn-danger me-auto" href="/patients">Cancel</a>
        </div>
        
    </form>

</div>



@endsection()