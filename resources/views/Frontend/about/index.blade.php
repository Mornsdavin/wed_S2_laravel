@extends('layouts.menu')
@section('content')
<div class="row p-4">
    <div class="col-sm-6 p-3">
        <p>
            Welcome to SHOP, your friendly neighborhood destination for the latest in mobile phones and laptops! We're your one-stop-shop for all your tech needs, offering a curated selection of top-quality devices at affordable prices.
Discover a diverse range of smartphones, from budget-friendly options to flagship models, catering to every preference and budget. Whether you're a photography enthusiast, a gaming fanatic, or a productivity powerhouse, we have the perfect phone to complement your lifestyle.
In addition to our impressive phone lineup, we also specialize in laptops that pack power and portability into sleek designs. Whether you need a reliable workhorse for business tasks or a versatile machine for multimedia entertainment, we've got you covered with our handpicked selection of laptops from leading brands.
At SHOP, we believe in delivering not just products, but exceptional customer experiences. Our knowledgeable team is here to provide personalized assistance, helping you find the ideal device that meets your specific requirements. From guiding you through the latest features to offering troubleshooting tips, we're dedicated to ensuring your satisfaction every step of the way.
Shop with confidence knowing that all our products undergo rigorous quality checks to ensure performance and reliability. With secure payment options and fast shipping, getting your hands on the latest tech has never been easier or more convenient.
Join our community of satisfied customers and elevate your tech game with SHOP. Explore our collection of phones and laptops today, and let us help you find the perfect device to stay connected, productive, and entertained!
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
    <div class="col-sm-6 p-3">
        <img src="https://c8.alamy.com/comp/2RNP39X/o2-mobile-phone-store-the-bridges-shopping-centre-city-centre-sunderland-tyne-and-wear-england-united-kingdom-2RNP39X.jpg" width="100%" alt="">
    </div>
</div>
@endsection

