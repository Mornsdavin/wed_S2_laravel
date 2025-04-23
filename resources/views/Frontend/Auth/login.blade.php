<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .bg{
        background-image: url('/assets/screenlogin.jpg');
        background-repeat: no-repeat;
        background-size: 80%;
        background-position: center;
    }
    .height{
        height: 100vh;
    }
    .color{
        background-color: #ffffff;
        padding: 9%;
        border-radius: 15px;
        font-size: 20px;
    }
    img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .card-with-shadow {
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Adjust the values as needed */
}

</style>
<body>

    <div class="container-fluid bg">
        <div class="row">
          <div class="col-sm-7 ">
            {{-- <img src="/assets/screenlogin.jpg" alt=""> --}}
          </div>
          <div class="col-sm-5 color height">
            <form action="{{route('loginA')}}" method="POST">
                @csrf
                <div class="title">
                    <h4  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #8796a5; font-weight: bold;font-size: 28px;">
                        Login to Shop
                    </h4>
                    
                    <div class="text-center  m-b-20 ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="email" class="mt-5" style="color: #8796a5; font-size: 16px;">Email or Phone Number</label>
                        <div class="card-with-shadow">
                            <input class="form-control border-0" type="text" name="email" id="email" placeholder="Enter your email or number phone" autofocus>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="form-group password">
                    <div class="col-xs-12 ">
                        <label for="password" style="color: #8796a5; font-size: 16px;" class=" mt-5">Password</label>
                        <div class="card-with-shadow">
                            <input type="password"  class="form-control border-0{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Enter password">
                        </div>
                    </div>
                </div>
                <div class="form-group text-center p-b-10" style="margin-bottom: 10px">
                   <div class="row color">
                    <div class="col-xs-6">
                        <button type="submit" class="btn mt-2 w-100" style="background-color: #8796a5; padding: 11%; color: #ffffff">Login</button>
                    </div>
                    <div class="col-xs-6">
                        <a href="{{ url('/') }}" type="btn" class="btn mt-2" style="background-color: #ffffff; padding: 11%; color: #8796a5">Home</a>
                    </div>
                   </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</body>
</html>
