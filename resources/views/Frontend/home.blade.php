@extends('layouts.menu')
@section('content')
<div class="">
<div class="">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @php
                $carouselProducts = $products->whereIn('id', [1, 2, 3]);
                $first = true;
            @endphp
            
            @foreach($carouselProducts as $product)
                @foreach($product_imgs as $img)
                    @if($product->id == $img->product_id)
                        <div class="carousel-item {{ $first ? 'active' : '' }}">
                            <img src="{{ '/assets/' . $img->product_img }}" class="d-block w-100" alt="{{ $product->product_name }}">
                        </div>
                        @php $first = false; @endphp
                        @break
                    @endif
                @endforeach
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="m-4"></div>
        <h3  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Smart Phone</h3>
        <hr>
        <div class="row gap-5 row-cols-2 row-cols-sm-3 row-cols-lg-4  justify-content-center align-content-center pb-5 ">
            @foreach ($products->where('id', '>=', 4) as $item)
            <a href="{{ route('home.productDetail', ['id' => $item->id]) }}" class="card text-decoration-none">
                @foreach ($product_imgs as $img)
                    @if ($item->id == $img->product_id)
                        <div class="d-flex justify-content-center align-content-center ">
                            <img width="250px" height="250px" src="{{ '/assets/' . $img->product_img }}" alt="hello">
                        </div>
                    @endif
                @endforeach
                <div class="card-body text-center ">
                    <hr>
                    <h4 class="card-text">{{ $item->product_name }}</h4>
                    <h5 class="card-title text-warning"><strong>$ {{ $item->price }}</strong></h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <br><br>
</div>
@endsection



{{-- @foreach ($products as $item)
                <a href="{{ route('home.productDetail', ['id' => $item->id]) }}" class=" text-decoration-none">
                    <div class="card d-flex flex-column align-content-center justify-content-center ">
                        <div class="">
                            @foreach ($product_imgs as $img)
                            @if ($item->id == $img->product_id)
                                <img src="{{ '/assets/' . $img->product_img }}" alt="" width="200px"
                                    height="200px">
                            @endif
                            @endforeach
                            <div class="card-body">
                                <hr>
                                <h4 class="card-text">{{ $item->product_name }}</h4>
                                <h5 class="card-title text-warning"><strong>$ {{ $item->price }}</strong></h5>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach --}}