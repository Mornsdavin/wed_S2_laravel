@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">
        <a href="http://127.0.0.1:8000/admin/employee/employeelist" class="btn border-0 active" role="button" aria-pressed="true">Employee-></a>
        <a href="http://127.0.0.1:8000/admin/employee/components"  class="btn border-0 active" role="button" aria-pressed="true">Add / Edit Employee</a>
      </span>
    </div>
  </nav>
  <div class="container-fluid bg-light p-4">
    <form action="{{route('user.store')}}" method="POST">
        @csrf
            <div>
                <label for="" class="mt-5">Name:</label>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" placeholder="Full Name" name="name" required value="{{old('name')}}">
            </div>
            <div>
                <label for="" class="mt-5">Email:</label>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="email" class="form-control" placeholder="Email" name="email" required value="{{old('email')}}">
            </div>
            <div>
                <label for="" class="mt-5">Password:</label>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" class="form-control" placeholder="password" name="password" required>
            </div>
            <div>
                <label for="" class="mt-5">Confirm Password:</label>
                @error('confirm_password')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" required>
            </div>
            <div class="mt-5  text-center">
                <button class="btn bg-info w-100" type="submit" >Create</button>
            </div>
        </form>
  </div>
</div>

@endsection()
