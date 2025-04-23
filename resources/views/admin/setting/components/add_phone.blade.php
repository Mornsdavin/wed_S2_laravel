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
    <form action="{{route('store.phone')}}" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Product Code:</label>
                    @error('product_code')
                        <div class="error">{{ $message }}</div>
                    @enderror                    
                    <input type="text" class="form-control" name="product_code"  placeholder="code " required value="{{old('product_code')}}" >
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Product Name:</label>
                    @error('product_name')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="product_name"  placeholder="Name phone" required value="{{old('product_name')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Display:</label>
                    @error('display')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="display"  placeholder="Enter Display" required value="{{old('display')}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Ram:</label>
                    @error('ram')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="ram"  placeholder="number" required value="{{old('ram')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Processor:</label>
                    @error('processor')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="processor"  placeholder="Enter Processor" required value="{{old('processor')}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Camera:</label>
                    @error('camera')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="camera"  placeholder="Enter Camera" required value="{{old('camera')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Battery:</label>
                    @error('battery')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="battery"  placeholder="Enter Battery" required value="{{old('battery')}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Warranty:</label>
                    @error('warranty')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="warranty"  placeholder="Enter number" required value="{{old('warranty')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Price:</label>
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="price"  placeholder="Enter price" required value="{{old('price')}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Storage:</label>
                    @error('storage')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="storage"  placeholder="Enter number" required value="{{old('storage')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Image:</label>
                   @error('product_img') 
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="file" class="form-control" name="product_img">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Color name:</label>
                    @error('color_name')
                        <div class="error">{{ $message }}</div>
                    @enderror 
                    <input type="text" class="form-control" name="color_name" required>
                </div>
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{route('list.phone')}}" class="btn btn-secondary">Back</a>
    </form>
  </div>
</div>
<style>
        .error{
        color: red;
    }
</style>
@endsection()
