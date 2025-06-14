@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Setting</span>
    </div>
  </nav>
  <table class="table table-bordered" >

    <div class="w-25">
      <a href="{{route('create.phone')}}" class="btn btn-success btn-lg w-50 active">Add Phone</a>
    </div>

    <tr class="text-center">
      <th scope="row">ID</th>
      <th>Code</th>
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>Action</th>

    </tr>

  </table>


@endsection()
