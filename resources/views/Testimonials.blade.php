<!DOCTYPE html>
<html lang="en">

<body style="background-color:#fff5fe;">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Princess a"la mode') | Testimonials</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="list-group">

                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('Index') }}">Home</a>

                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    <a class="nav-link {{ Route::is('products') ? 'active' : '' }}"
                        href="{{ route('Produk') }}">Products</a>
                    <a class="nav-link {{ Route::is('Testimonials') ? 'active' : '' }}"
                        href="{{ route('Testimonials') }}">Testimonials</a>

            </div>

        </nav>
        </div>
        <h1 body class="text-center">Testimonials from our customers</h1><br>


        <div body class="text-center"class="media-body">
            <img body class="text-center"class="d-flex align-self-start mr-3" src="/images/1.png">
            <h2 body class="text-center"class="mt-0">Bertha</h2>
            <h3 body class="text-center">"Food was amazing 5/5 star,i feel like i was a real princess"</h3><br>

            <div body class="text-center"class="media-body">
                <img body class="text-center"class="d-flex align-self-start mr-3" src="/images/2.png">
                <h2 body class="text-center"class="mt-0">Felicia</h2>
                <h3 body class="text-center">"enak banget makanannya kayak lagi di France-France gitu"</h3><br>

                <div body class="text-center"class="media-body">
                    <img body class="text-center"class="d-flex align-self-start mr-3" src="/images/3.png">
                    <h2 body class="text-center"class="mt-0">Hailey</h2>
                    <h3 body class="text-center">"Wiii aku jadi putri hehe"</h3><br>

                    <div body class="text-center"class="media-body">
                        <img body class="text-center"class="d-flex align-self-start mr-3" src="/images/k.png">
                        <h2 body class="text-center"class="mt-0">Kiara</h2>
                        <h3 body class="text-center">"makanannya prefect banget,cocok untuk date night nih"</h3>
                        <br>

                        <div body class="text-center"class="media-body">
                            <img body class="text-center"class="d-flex align-self-start mr-3" src="/images/p.png">
                            <h2 body class="text-center"class="mt-0">Priska</h2>
                            <h3 body class="text-center">"Ratatouille nya enak banget jadi kepikiran film masa kecil dulu deh"</h3>
                            <br>


                            <p body class="text-center">Food      --      Restaurant     --     Princess</p>



                    </div>
                    <br>


                </div>


                </nav>


                <script src="{{ asset('js/app.js') }}"></script>
    </body>

    @extends('master')
    @section('content')

</html>
