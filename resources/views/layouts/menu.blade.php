<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Phone-Shop</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    footer{
        background-color: #111;
        height: 90px;

    }
    .footerContainer{
        width: 100%;
        padding: 10px 10px 0px 0px;
    }
    .socialIcons{
        display: flex;
        justify-content: right;
    }
    .socialIcons a{
        text-decoration: none;
        padding:  10px;
        background-color: white;
        margin: 10px;
        border-radius: 50%;
    }
    .socialIcons a i{
        font-size: 2em;
        color: black;
        opacity: 0,9;
    }
    /* Hover affect on social media icon */
    .socialIcons a:hover{
        background-color: #111;
        transition: 0.5s;
    }
    .socialIcons a:hover i{
        color: white;
        transition: 0.5s;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* overflow: hidden; */
    }

    nav {
        background-color: #f2f2f2;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: grey 0px 1px 0px;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .logo a{
        text-decoration: none;
        color: #b5b5b5;
        font-weight: bold;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    li {
        margin-right: 20px;
    }

    li a {
        text-decoration: none;
        color:rgb(77, 77, 77);
        font-weight: bold;
    }

    li a:hover {
        color: #78c4c7;
    }
</style>
<body>
    <div id="app">
        <nav class="">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="assets/logo.jpg" alt="Logo">
                    <span>SHOP</span>
                </a>
            </div>
            <div class="right">
                <ul class="p-3">
                    <li><a href="{{ url('/home') }}">HOME</a></li>
                    <li><a href="{{ url('/phone/productlist') }}">PRODUCT</a></li>
                    <li><a href="{{ url('/about') }}">ABOUT</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                    <li><a href="{{ url('/login') }}">LOGIN</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
    @extends('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
