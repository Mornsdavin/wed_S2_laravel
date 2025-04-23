@extends('layouts.menu')
<style>
    body{
         padding: 0;
         margin: 0;
    }
    .container{
        width: 80%;
        overflow: hidden;
        background-origin: pink;
        margin: auto;
    }
    .container .item{
        width: 23%;
        height: 300px;
        float: left;
        /* background-color: blue; */
        margin: 10px 1%;
    }
    .item .pic{
        width: 100%;
        height: 70%;
        background-color: black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .item .pic img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .item .description{
        width: 100%;
        height: 30%;
        background-color: rgb(192, 233, 245);
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .description h3{
        font-size: 20px;
        /* text-align: center; */
        margin-top: 0px;
        font-family: 'Courier New', Courier, monospace;
    }
</style>
@section('content')

<?php
    $product = array(
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/bglogin1.avif', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),


    );
?>

<div class="m-4">
    <h3  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Smart Phone</h3>

    <hr>
    <div class="item p-2 d-flex row row-cols-5 justify-content-center flex-wrap ">
        @foreach ($products as $item)
        <a href="{{route('home.productDetail', ['id'=>$item->id])}}" class="col-sm-3 text-decoration-none m-3 p-3">
            <div class="card p-4" >
                <div class="d-flex justify-content-center">
                    @foreach ($product_imgs as $img)
                    @if ($item->id == $img->product_id )
                        <img src="{{ '/assets/' . $img->product_img }}" alt="" width="200px" height="200px">
                    @endif
                    @endforeach
                </div>
                <div class="card-body">
                    <hr>
                    <h4 class="card-text">{{$item->product_name}}</h4>
                    <h5 class="card-title text-warning"><strong>$ {{$item->price}}</strong></h5>

                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
{{-- <div class="container">
    <h2>Laptop</h2><hr>
    <?php
        foreach ($product as $item) {
            ?>
            <div class="item">
                <div class="pic">
                    <img src="<?php echo $item['img'] ?>" alt="">
                </div>
                <div class="description">
                    <h3><?php echo $item['des'] ?></h3>
                    <p><?php echo $item['price'] ?></p>
                </div>
            </div>
            <?php
        }
    ?>
</div> --}}
@endsection

