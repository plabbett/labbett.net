@extends('_layouts.master')
@section('title', 'Patrick Labbett')
@section('body')
<div class="container px-4 mx-auto max-w-lg mt-10 text-center">
    <h1 class="text-indigo-700 
    font-extrabold 
    text-4xl 
    text-center
    font-sans">
        Patrick Labbett
    </h1>
    <h2 class="text-indigo-400 
    text-2xl 
    text-center
    mb-6">
        I build things for the <span class="font-bold text-indigo-300">call center industry</span>.
    </h2>

    <a class="px-4 py-2 rounded font-bold
    bg-gray-800 text-indigo-500
    hover:bg-gray-700 hover:text-indigo-100 shadow 
    hover:border-yellow-700
    " href="https://notifi.us">
        <i class="fas fa-user-astronaut text-gray-500 hover:text-yellow-500 font-normal"></i> Hire my company
    </a> 


</div>

<div class="container px-4 mx-auto max-w-md mt-6 text-center">
    <img src="/assets/images/master_plan.svg" title="Patrick Labbett" alt="Patrick Labbett">
</div>
@endsection
