<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <nav class="border-b border-gray-100" style="background-color: #27282C;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="d-flex justify-between flex-auto">

                    <div class="flex-shrink-0 flex items-center text-light ">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('/img/logo.png') }}" alt="{{ __('logo') }}" height="10">
                        </a>
                    </div>

                    <div class="flex align-self-center float-right">
                        <div class="text-light mx-2">Developers Tools</div>
                        <div class="text-light mx-2">Team Tools</div>
                        <div class="text-light mx-2">Learning Tools</div>
                        <div class="text-light mx-2">Solutions</div>
                        <div class="text-light mx-2">Store</div>
                        <div class="text-light mx-2"><i class="fas fa-search"></i></div>
                        <div class="text-light mx-2"><i class="fas fa-user-alt"></i></div>
                        <div class="text-light mx-2"><i class="fas fa-cart-plus"></i></div>
                    </div>
                </div>
            </div>
        </div>


    </nav>



    <main class="container-fluid">
        <div style="margin-left: -20px">
        
    <div name="header">
        <div class="d-flex justify-between flex-auto sticky" style="width: 90vw;">
            <div class="ml-5">
                <h2 class="mr-4 text-xl text-gray-800 leading-tight font-bold  align-self-center">
                    {{ __('PhpStorm') }}
                </h2>
            </div>
            <div class="d-flex align-self-center">
                <div class="text-dark mx-2 p align-self-center" style="font-size: 12px;">
                    <p>Easy Access</p>
                </div>
                <div class="text-dark mx-2 p align-self-center" style="font-size: 12px;">
                    <p>What's New</p>
                </div>
                <div class="text-dark mx-2 p align-self-center" style="font-size: 12px;">
                    <p>Features</p>
                </div>
                <div class="text-dark mx-2 p align-self-center" style="font-size: 12px;">
                    <p>Learn</p>
                </div>
                <div class="text-dark mx-2 p align-self-center" style="font-size: 12px;">
                    <p>Blog & Social</p>
                </div>
                <div class="text-dark mx-2 p align-self-center" style="font-size: 12px;">
                    <a href="{{ route('buy') }}">
                        <p>Buy</p>
                    </a>
                </div>

                <button class="btn btn-primary align-self-center mx-3" style="border-radius: 12px; font-size: 12px; padding: 10px">Download</button>
            </div>
        </div>
    </div>
            @yield('content')

        </div>
    </main>
</body>
</html>
