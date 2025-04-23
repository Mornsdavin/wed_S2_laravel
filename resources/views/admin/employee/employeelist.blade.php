@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Employee</span>
    </div>
  </nav>
  <div class="w-25">
    <a href="{{route('register')}}" class="btn btn-success btn-lg w-50 active" role="button" aria-pressed="true">Add Employee</a>
  </div>
  <table class="table table-bordered">
    <tr class="text-center">
      <th scope="row">ID</th>
      <td>Name</td>
      <td>Email</td>
      <td>Password</td>
      <td>Action</td>
    </tr>

    @foreach ($employee as $emp)
    <tr>
        <td>{{$emp->id}}</td>
        <td>{{$emp->name}}</td>
        <td>{{$emp->email}}</td>
        <td>{{$emp->password}}</td>

        <td>
            <form method="POST" action="{{route('delete.employee',['employee'=>$emp])}}">
                @csrf
                @method('DELETE')
                <div class="d-flex justify-content-center align-items-center">
                  <a
                    href="{{route('edit.employee',['employee'=>$emp])}}"
                    class="text-secondary text-decoration-none "
                  >
                    <img src="/assets/edit.svg"/>
                    Edit
                  </a>
                <button class="btn btn-block text-secondary">
                  <img src="/assets/delete.svg"/>
                  Delete
                </button>
                </div>
            </form>
        </td>
    </tr>
    @endforeach
  </table>
</div>

@endsection()

