@extends('master')
@section('content')
<form class="addstd" action="create" method="POST">
@csrf
    
<div style="background-color:green;">
@if(Session::get('success'))
<div style="color:black; margin: 1rem; ">
{{Session::get('success')}}
</div>
@endif

@if(Session::get('Fail'))
<div style="color: red;">
{{Session::get('Fail')}}
</div>
@endif
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Roll Number</label>
    <input type="text" class="form-control" name="rollnumber" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mobile number</label>
    <input type="text" class="form-control" name="mobilenumber">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" class="form-control" name="email">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection