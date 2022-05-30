@extends('master')
@section('content')
<h2 style="text-align: center;">Student List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Roll Number</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
      @foreach($stdnts as $stdnt)
    <tr>
      <th scope="row">{{$stdnt['id']}}</th>
      <td>{{$stdnt['name']}}</td>
      <td>{{$stdnt['rollnumber']}}</td>
      <td>{{$stdnt['mobilenumber']}}</td>
      <td>{{$stdnt['email']}}</td>
      <td><a href="detail/{{$stdnt['rollnumber']}}"class="btn btn-primary">Payment history</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection