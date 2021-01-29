<x-app-layout>
    <x-slot name="header">
        <div class="d-flex">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight font-bold">
                    {{ __('PhpStorm') }}
                </h2>
            </div>
            <div class="d-flex"> 
                <div class="text-dark mx-2 p"><p>Easy Access</p></div>
                <div class="text-dark mx-2 p"><p>What's New</p></div>
                <div class="text-dark mx-2 p"><p>Learning Tools</p></div>
                <div class="text-dark mx-2 p"><p>Learning Tools</p></div>
                <div class="text-dark mx-2 p"><p>Learning Tools</p></div>
                <div class="text-dark mx-2 p"><p>Learning Tools</p></div>
            
                <button class="btn btn-primary">Download</button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
