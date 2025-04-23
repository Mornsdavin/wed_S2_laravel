@extends('layouts.menu')
@section('content')

<div class="container p-2 bg-light">
    <div class="row">
        <div class="col-sm-6 p-4 bg-white">
            <div class="d-flex justify-content-center p-3">
                <img src="{{ '/assets/' . $productImg->product_img }}" alt="" width="300px" height="300px">
            </div>
            <br>
            <hr class="text-warning font-weight-bold">
            <form action="{{route('order.store', ['id'=>$product->id])}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Full Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm" name="name" id="colFormLabelSm" placeholder="please your name..." required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Phone:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm" name="phone" id="colFormLabelSm" placeholder="please your phone number..." required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control form-control-sm" name="email" id="colFormLabelSm" placeholder="please your email..." required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Address:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm" name="address" id="colFormLabelSm" placeholder="please your phone number..." required>
                    </div>
                </div>
                <br>
                <br>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Pay Now</button>
                </div>
            </form>
        </div>
        <div class="col-sm-6 p-4">
            <h3>{{$product->product_name}} {{$product->storage}}G USA (New)</h3>
            <hr class="text-warning font-weight-bold">
            <h4 class="text-warning font-weight-bold"><strong>$ {{$product->price}}</strong></h4>
            <h6>Ram: <strong>{{$product->ram}}G</strong></h6>
            <h6>Storage: <strong>{{$product->storage}}G</strong></h6>
            <h6>Display: <strong>6.7" </strong>1284x2778 pixels</h6>
            <h6>Battery: <strong>{{$product->battery}}mAh</strong></h6>
            <h6>Color: <strong>{{$productImg->color_name}}</strong></h6>
            <h6>Weight:	<strong>240 g (8.47 oz)</strong></h6>
            <h6>In Box:
                <li class="text-info">Free Jelly Case</li>
                <li class="text-info">Free Temper Glass</li>
                <li class="text-info">Free Adaptor 20W</li>
            </h6>
            <h6>Apple Store Warranty: <strong>1 Year</strong></h6>
            <h6>Call Us: <strong>0816216/0665855 :49</strong></h6>
            <h6>Location: <strong>St.2004</strong>, Phnom Penh</h6>
            <br>
            <hr>
            <div class = "product-content">
                <div class = "product-rating">
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star-half-alt text-warning"></i>
                    <span>4.7(21)</span>
                </div>
                <br>
                <div class = "product-detail">
                    <h6>Available: <span class="font-weight-bold">In stock</span></h6>
                    <h6>Category: <span>iPhone, Smartphone</span></h6>
                    <h6>Shipping Fee: <span>Free</span></h6>
                    <h6>Shipping Area: <span>All over the world</span></h6>
                </div>
                <p><strong>Disclaimer. </strong>We can not guarantee that the information on this page is 100% correct.</p>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection

