@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Phone</span>
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

    @foreach ($products as $product)

      <tr class="text-center">
        <td>{{$product->id}}</td>
        <td>{{$product->product_code}}</td>
        <td >{{$product->product_name}}</td>
        <td >${{$product->price}}
        </td>
        <td>
          @foreach ($product_imgs as $img)
                        @if ($product->id == $img->product_id )
                        <img src="{{ '/assets/' . $img->product_img }}" alt="" width="120px" height="120px">
                        @endif
          @endforeach
        </td>

        <td>
          <form method="POST" action="{{route('delete.phone',['product'=>$product])}}">
          {{-- <form method="POST" action=""> --}}
            @csrf
            @method('DELETE')
            <div class="d-flex justify-content-center align-items-center">
              <a
                href="{{route('edit.phone',['product'=>$product])}}"
                {{-- href="" --}}
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


@endsection()
