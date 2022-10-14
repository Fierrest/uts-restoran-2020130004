<!DOCTYPE html>
<html lang="en">
    <body style="background-color:#fff5fe;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Princess a"la mode') | About</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="list-group">
            <div class="inner">
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('Index') }}">Home</a>

                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    <a class="nav-link {{ Route::is('products') ? 'active' : '' }}"
                        href="{{ route('Produk') }}">Products</a>
                    <a class="nav-link {{ Route::is('Testimonials') ? 'active' : '' }}"
                        href="{{ route('Testimonials') }}">Testimonials</a>
                </nav>
            </div>
        </div>

    </nav>
<h1>About us</h1>
<h2>Princess a'la mode is a restaurant that originally created by Fierrest Eyliem in 2022 in bandung,west java.Our goal is that every girl can always achieving their dream as a princess while enjoying our delicious french food</h2>
<img body class="text-center"class="d-flex align-self-start mr-3" src="/images/about.png">
<p body class="text-center">Food      --      Restaurant     --     Princess</p>
<script src="{{ asset('js/app.js') }}"></script>
</body>

@extends('master')
@section('content')

</html>
