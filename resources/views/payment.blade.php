@extends('master')
@section('content')
<div class="row">
    <div class="col-6">
        <form class="formz" action="paying" method="POST">
            @csrf
            <div style="background-color: green;">
            @if(Session::get('success'))
            <div style="color: black; margin: 1rem;">{{Session::get('success')}}</div>
             
             @endif
              @if(Session::get('Fail'))
              <div style="color: red;"> {{Session::get('Fail')}}</div>
              @endif
              </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Roll Number</label>
                <input type="text" class="form-control" name="rollnumber">
            </div> 

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">month</label>
                <input type="text" class="form-control" name="month">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount">
            </div>


            <button type="submit" class="btn btn-primary">Payment Accepted</button>
        </form>


    </div>
    <div class="col-6">
    <h2 style="text-align: center;">Student List</h1>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Roll Number</th>
      <th scope="col">Month</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
      @foreach($joins as $stdnt)
    <tr>
      <td>{{$stdnt->name}}</td>
      <td>{{$stdnt->rollnumber}}</td>
      <td>{{$stdnt->month}}</td>
      @if(DB::table('payments')->get('amount'))
      <td style="color: red;">Paid</td>
      @endif

      <td></td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>

</div>
@endsection