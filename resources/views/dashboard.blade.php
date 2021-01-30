@extends('layouts.main')

@section('content')



{{--  <x-app-layout>
    <x-slot name="header">
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
                    <a href="{{ route('buy') }}"> <p>Buy</p></a>
                </div>

                <button class="btn btn-primary align-self-center mx-3" style="border-radius: 12px; font-size: 12px; padding: 10px">Download</button>
            </div>
        </div>
    </x-slot>  --}}

    <div class="py-12 d-flex" style="background-image: url('/img/NTooR.png'); height: 90vh">

        <div class="align-self-center text-center justify-center" style="position: absolute; width: 500px; height: 200px; z-index: 15; top: 50%; left: 40%; margin: -100px 0 0 -150px;">
            <div class="d-flex flex-auto justify-center">
                <img src="{{ asset('/img/logo.png') }}" alt="{{ __('') }}" style="margin-bottom: 20px;">
                
                <h1 style="font-size: 50px; margin-bottom: 20px;">{{ isset($variables->appName) ? $variables->appName : 'PhpStorm'  }}</h1>
            </div>
            <div>
                <h1 style="font-size: 30px; margin-bottom: 20px;">{{ isset($variables->description) ? $variables->description : 'The Lightning-Smart PHP IDE'}}</h1>
                <button class="btn btn-dark align-self-center mx-3" style="border-radius: 12px; font-size: 12px; padding: 10px; margin-bottom: 10px;">Download Now</button>
                <p>Free 30-day trial</p>
            </div>
        </div>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>  --}}
    </div>

    <div class="py-12 d-flex text-center justify-center" style="background-color: #F4F4F4; height: 100%">
        <div class="d-flex justify-center" style="width: 40%">
            <div class="d-flex justify-center row" style="width: 60%">
                <div style="margin-bottom: 40px;">
                    <h1>Why PhpStorm</h1>
                    <h1>Enjoy Productive PHP</h1>
                    <button class="btn btn-dark align-self-center mx-3" style="border-radius: 12px; font-size: 12px; padding: 10px">Download Now</button>
                </div>
                <div class="align-self-center" style="margin-bottom: 40px;">
                    <h1>PhpStorm deeply understands your code.</h1>
                </div>
                <div class="align-self-center" style="margin-bottom: 40px;">
                    <h1>Major frameworks support</h1>
                    <p>PhpStorm is perfect for working with Symfony, Laravel, Drupal, WordPress, Zend Framework, Magento, Joomla!, CakePHP, Yii, and other frameworks.</p>
                </div>
                <div style="margin-bottom: 40px;">
                    <h1>All the PHP tools</h1>
                    <p>The editor actually 'gets' your code and deeply understands its structure, supporting all the PHP language features for modern and legacy projects. It provides the best code completion, refactorings, on-the-fly error prevention, and more.</p>
                </div>
                <div style="margin-bottom: 40px;">
                    <h1>Front-end technologies included</h1>
                    <p> Make the most of the cutting edge front-end technologies, such as HTML 5, CSS, Sass, Less, Stylus, CoffeeScript, TypeScript, Emmet, and JavaScript, with refactorings, debugging, and unit testing available. See the changes instantly in the browser thanks to Live Edit.</p>
                </div>
                <div style="margin-bottom: 40px;">
                    <h1>Built-in developer tools</h1>
                    <p>Perform many routine tasks right from the IDE, thanks to the Version Control Systems integration, support for remote deployment, databases/SQL, command-line tools, Docker, Composer, REST Client, and many other tools.</p>
                </div>
            </div>
        </div>
        <div style="width: 60%" class="sticky-top">
            <img src="{{ asset('https://www.jetbrains.com/phpstorm/img/screenshots/2020.1/phpstorm_codeAnalysis@2x.png') }}" height="450" width="600">
        </div>
    </div>
{{--  </x-app-layout>  --}}
@endsection
