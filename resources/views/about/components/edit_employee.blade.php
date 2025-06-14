@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">
        <a href="http://127.0.0.1:8000/admin/employee/employeelist" class="btn border-0 active" role="button" aria-pressed="true">Employee-></a>
        <a href="http://127.0.0.1:8000/admin/employee/components/edit_customer"  class="btn border-0 active" role="button" aria-pressed="true">Add / Edit Employee</a>
      </span>
    </div>
  </nav>
  <div class="container-fluid bg-light p-4">
    <form action="{{ route('update.employee',['id'=>$employee->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="" class="mt-5">Name:</label>
            <input type="text" class="form-control" placeholder="Full Name" name="name" value="{{$employee->name}}">
        </div>
        <div>
            <label for="" class="mt-5">Email:</label>
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$employee->email}}">
        </div>
        <div>
            <label for="" class="mt-5">Password:</label>
            <input type="password" class="form-control" placeholder="password" name="password" value="{{$employee->password}}">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('employee.list') }}" class="btn btn-secondary">Back</a>
    </form>
  </div>
</div>

@endsection()
