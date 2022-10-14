<!DOCTYPE html>
<html lang="en"><body style="background-color:#fff5fe;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Princess a"la mode') | produk</title>
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
<h1>Here's our best menu and specials</h1>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food1.jpg">
<h2>Soupe à l’oignon</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food2.jpg">
<h2>Cassoulet</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food3.jpg">
<h2>Bœuf bourguignon</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food4.jpg">
<h2>Chocolate soufflé</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food5.jpg">
<h2>Flamiche</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food6.jpg">
<h2>Confit de canard</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food7.jpg">
<h2>Salade Niçoise</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food8.jpg">
<h2>Ratatouille</h2>
<img  body class="text-center"class="d-flex align-self-start mr-3" src="/images/food9.jpg">
<h2>Tarte Tatin</h2>
<p body class="text-center">Food      --      Restaurant     --     Princess</p>
    <script src="{{ asset('js/app.js') }}"></script>
</body>


@extends('master')
@section('content')
</html>
