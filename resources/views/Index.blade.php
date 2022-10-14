<!DOCTYPE html>
<html lang="en">
    <body style="background-color:#fff5fe;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Princess a"la mode') | Index</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">
    <nav class="navbar navbar-light" style="background-color:powder blue;">
        <div class="list-group">
            <div class="text-center">
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('Index') }}">Home</a>
                <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="nav-link {{ Route::is('products') ? 'active' : '' }}" href="{{ route('Produk') }}">Products</a>
                <a class="nav-link {{ Route::is('Testimonials') ? 'active' : '' }}" href="{{ route('Testimonials') }}">Testimonials</a>
            </nav>

            </div>
        </div>

    </nav>

<h1>Welcome to Princess a'la mode</h1>
<h1>a Restaurant to become a Princess</h1>
<img body class="text-center"class="d-flex align-self-start mr-3" src="/images/index.png">
    <script src="{{ asset('js/app.js') }}"></script>
    <p body class="text-center">Food      --      Restaurant     --     Princess</p>

    @extends('master')
@section('content')
</body>




</html>
