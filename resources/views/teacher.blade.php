@extends('master')
@section('content')

<form class="d-flex system" role="search" action="search">
        <input class="form-control me-2" name="query" type="search" placeholder="Search by name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
<nav class="navbar navbar-expand-lg bg-light navy">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item round" >
          <a class="nav-link active" aria-current="page" href="show">Payment Status</a>
        </li>
        <li class="nav-item round ">
          <a class="nav-link" href="addstd">Add student</a>
        </li>
        <li class="nav-item round">
          <a class="nav-link" href="stdlst">Student list</a>
        </li>
        <li class="nav-item round">
          <a href="logout" class="nav-link">logout</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<h1 style="text-align: center;">Welcome to the dashboard</h1>

@endsection