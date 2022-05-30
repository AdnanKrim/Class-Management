@extends('master')
@section('content')


<form action="check" method="POST">
    @csrf
    <div style="color:greenyellow">
        @if(Session::get('Fail'))
        <div style="color: red;">
            {{Session::get('Fail')}}

        </div>
        @endif
    </div>
    <div class="mb-3 row formz">
        <h2>Teacher Login Page</h2>
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password">
        </div>
    </div>
    <button class="btn btn-primary butn" type="submit">Log In</button>
</form>

@endsection