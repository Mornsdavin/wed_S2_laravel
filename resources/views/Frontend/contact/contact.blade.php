@extends('layouts.menu')
@section('content')
<div class="row p-4">
    <div class="col-sm-6 p-5">
        <p>
            Welcome to SHOP, your friendly neighborhood destination for the latest in mobile phones and laptops! We're your one-stop-shop for all your tech needs, offering a curated selection of top-quality devices at affordable prices.
Discover a diverse range of smartphones, from budget-friendly options to flagship models, catering to every preference and budget. Whether you're a photography enthusiast, a gaming fanatic, or a productivity powerhouse, we have the perfect phone to complement your lifestyle.
In addition to our impressive phone lineup,
        </p>

        <hr>
        <div id="carouselExampleIndicators" class="carousel slide text-center w-100 h-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/assets/cover-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/assets/cover-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/assets/cover-5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 p-5">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Full Name</label>
                <input type="text" class="form-control" id="" placeholder="Please input...">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="" placeholder="name@example.com">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Commente:</label>
              <textarea class="form-control" id="" rows="3"  placeholder="please commente..." ></textarea>
            </div>
            <br><br>
            <div class="d-flex flex-row-reverse bd-highlight">
                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection()
