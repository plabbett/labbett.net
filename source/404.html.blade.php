@extends('_layouts.master')

@section('title', 'Not Found')

@section('body')
    <div class="container px-4 mx-auto max-w-lg text-center pt-12">
        <a href="/" class="text-indigo-300 hover:text-indigo-500">
            <h1 class="text-white text-5xl uppercase text-center font-sans">
            404 <span class="text-gray-300">Not Found</span>
        </h1>
        </a>
    </div>

    <div class="container px-4 max-w-sm mx-auto pt-12 text-center">
        <div class="w-100 my-24">

                <img class="w-auto mx-auto mb-4" src="/assets/images/void.svg" title="Go home" alt="Alien abduction">
            </a>
        </div>
    </div>

@endsection
