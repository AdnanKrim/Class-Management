@extends('master')
@section('content')


<div class="row">
    <div class="col-6">
        <h2>Student Details</h2>
        <h4>{{$stdnt['rollnumber']}}</h4>
        <h4>{{$stdnt['name']}}</h4>
        <h4>{{$stdnt['email']}}</h4>
        <h4>{{$stdnt['mobilenumber']}}</h4>
    </div>



    <!-- </div> -->



    <!-- <div class="row"> -->
  

    <div class="col-6">
    <h2>Payment Details</h2>
    @foreach($stdnt->payment as $payment)

        <h4>{{$payment->month}}</h4>
        <h4>{{$payment->amount}}</h4>
        <h4>{{$payment->created_at}}</h4>
        @endforeach
    </div>
   


</div>

@endsection