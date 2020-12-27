@extends('_layouts.master')

@section('title', 'Not Found')

@section('body')

    <div class="container max-w-md px-4 mx-auto text-center my-24">

            <img class="inline max-w-sm mx-auto mb-4" src="/assets/images/voice.svg" title="Nothing found here..." alt="Void">

            <p class="font-hairline text-2xl font-sans">
                <a href="/" class="text-gray-300 hover:text-white align-middle">Try this instead?</a>
            </p>
    </div>

@endsection
