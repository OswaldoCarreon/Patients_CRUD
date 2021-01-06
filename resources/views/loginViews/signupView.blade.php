@extends('layouts.layout')


@section('content')

<div class="container p-5">

    <h2>Register a new user</h2>

    <form class="p-5 needs-validation" action="/signup/auth" method="POST">
        @csrf
        
        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" name="username" value="" placeholder="username" required>
            <label for="floatingInput" >Username</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" value="" placeholder="password" required>
            <label for="floatingPassword">Password</label>
        </div>

        
        <div class="d-flex mt-5 justify-content-center">
            <input class="btn btn-success "type="submit" value="Sign up">
            <a class="mx-2 btn btn-danger me-auto" href="/">Cancel</a>
        </div>
        
    </form>

</div>

@endsection()