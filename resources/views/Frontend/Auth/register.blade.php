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
    .container-fluid{
        background-image: url('/assets/screenlogin.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: center;
        height: 100vh;
    }
    .padding{
        padding: 35px;
        margin-top: 30px;
        overflow: hidden;;
    }
    .error{
        color: red;
    }

</style>
<body>
    <div class="container-fluid">
        <div class="padding mt-5" style="background:rgba(255, 255, 255, 0.9); border-radius: 4px;max-width: 700px;margin: auto;">
            <div class="row">
                <div>
                    <div class="text-center">
                        <h3>Register</h3>
                    </div>
                    <div class="col-12" >
                        <form action="{{route('user.store')}}" method="POST">
                        @csrf
                            <div>
                                <label for="" class="mt-5">Name:</label>
                                @error('name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" placeholder="Full Name" name="name" required value="{{old('name')}}">
                            </div>
                            <div>
                                <label for="" class="mt-5">Email:</label>
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                                <input type="email" class="form-control" placeholder="Email" name="email" required value="{{old('email')}}">
                            </div>
                            <div>
                                <label for="" class="mt-5">Password:</label>
                                @error('password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                                <input type="password" class="form-control" placeholder="password" name="password" required>
                            </div>
                            <div>
                                <label for="" class="mt-5">Confirm Password:</label>
                                @error('confirm_password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                                <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" required>
                            </div>
                            <div class="mt-5  text-center">
                                <button class="btn bg-info w-100" type="submit" >register</button>

                                @if (Auth::check())
                                    <a href="" class="w-100" >register</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
