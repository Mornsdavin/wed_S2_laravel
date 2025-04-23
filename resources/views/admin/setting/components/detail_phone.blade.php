@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">
        <a href="http://127.0.0.1:8000/admin/phones" class="btn border-0 active" role="button" aria-pressed="true">Phone-></a>
        <a href="http://127.0.0.1:8000/admin/phones/components" class="btn border-0 active" role="button" aria-pressed="true">Add Phone</a>
      </span>
    </div>
  </nav>
  <div class="container-fluid bg-light p-4">
    <form action="">
        <br>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Product Code:</label>
                    {{$product->product_code}}
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Product Name:</label>
                    {{$product->product_name}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Display:</label>
                    {{$product->display}}
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Ram:</label>
                    {{$product->ram}}
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Processor:</label>
                    {{$product->processor}}
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Camera:</label>
                    {{$product->camera}}
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Battery:</label>
                    {{$product->battery}}
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Warranty:</label>
                    {{$product->warranty}}
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Price:</label>
                    {{$product->price}}
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Storage:</label>
                    {{$product->storage}}
                </div>
            </div> 
        </div>
        <br>
        <a href="{{route('list.phone')}}" class="btn btn-secondary">Back</a>
    </form>
  </div>
</div>

@endsection()
