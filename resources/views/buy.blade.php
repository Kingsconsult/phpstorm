@extends('layouts.main')

@section('content')



{{--  <x-app-layout>  --}}
    {{--  <x-slot name="header">
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
    </x-slot>  --}}


    <div class="d-flex bg-light" style="height: 250px; display: flex; flex-direction: column; justify-content: space-around; align-items: center">
        <div style="align-self: center;">
            <div style="display: flex; margin-top: 40px; margin-bottom: 80px;">
                <div style="margin-right: 100px;">
                    <h1 style="font-size: 50px; font-weight: bolder">Toolbox Subscription</h1>
                </div>
                <div>
                    <label for="country">Choose your country/region</label>
                    <input name="country" class="form-control">
                </div>
            </div>
            <div style="display: flex; align-self: center; ">
                <div style="display: flex; align-self: start; flex-direction: row;">
                    <h1 class="mx-4">For Organizations</h1>
                    <h1 class="mx-4">For Individual Use</h1>
                    <h1 class="mx-4">Special Offers</h1>
                    <h1 class="mx-4">FAQ</h1>
                </div>
            </div>
        </div>
    </div>

    <div>


{{--  </x-app-layout>  --}}
@endsection
