`
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- add icon link -->
    <link rel="icon" href="/assets/1.jpg" type="image/x-icon">

    <title>Shop</title>
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .bd{
      width: 94vw;
      margin: 3vw;
    }
    .slide{
      display: flex;
      justify-content: center;
      height: 400px;
    }
    .card{
      display: flex;
      justify-content: space-between;
      margin-top: 10px; 
      padding-left: 20px;
      margin: 10px;
      border: none;
    }
    .prodcut{
      display: flex;
    }
    .card-product{
      border: 1px solid rgb(146, 139, 139) ;
      border-radius: 5px;
      margin-right: 10px;
    }
    .text {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* number of lines to show */
              line-clamp: 2; 
      -webkit-box-orient: vertical;
    }

  .img{
    width: 215px;
    height: 200px;
    margin-top: 10px;
  }
  .col-sm-2{
    width: 16%;
  }
  
</style>
<body>  
  <div class="bd">
      <div class="slide">
          <img src="/assets/1.jpg"  alt="...">
      </div>
      <div class="card product">
        <div>
          <div>
            <h2>SmartPhone</h2>
          </div>
            {{-- product 1 --}}
            <div class="card-product my-3 col-sm-2 ">
              <img src="/assets/1.jpg" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
                <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
              </div>
            </div>
            {{-- product 2 --}}
            <div class="card-product my-3 col-sm-2 ">
              <img src="/assets/1.jpg" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
                <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
              </div>
            </div>
            {{-- product 3 --}}
            <div class="card-product my-3 col-sm-2 ">
              <img src="/assets/1.jpg" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
                <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
              </div>
            </div>
          {{-- product 4 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
          {{-- product 5 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
          {{-- product 6 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
          {{-- product 7 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
        </div>
    </div>
    <div>
          <div>
            <h2>laptop</h2>
          </div>
            {{-- product 1 --}}
            <div class="card-product my-3 col-sm-2 ">
              <img src="/assets/1.jpg" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
                <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
              </div>
            </div>
            {{-- product 2 --}}
            <div class="card-product my-3 col-sm-2 ">
              <img src="/assets/1.jpg" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
                <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
              </div>
            </div>
            {{-- product 3 --}}
            <div class="card-product my-3 col-sm-2 ">
                <img src="/assets/1.jpg" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
                <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
              </div>
            </div>
          {{-- product 4 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
          {{-- product 5 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
          {{-- product 6 --}}
          <div class="card-product my-3 col-sm-2 ">
            <img src="/assets/1.jpg" class="img" alt="...">
            <div class="card-body">
              <h5 class="card-title">$899.00 <small><del>$1128.00</del></small></h5>
              <p class="card-text"><small class="text-body-secondary">Product Name</small></p>
            </div>
          </div>
        </div>
  </div>
</body>
</html>
