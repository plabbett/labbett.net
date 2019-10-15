@extends('_layouts.master')
@section('title', 'Patrick Labbett')
@section('body')

@include('_layouts.nav')

<div class="container px-4 mx-auto max-w-lg text-center mt-8">
    <h1 class="text-indigo-800 font-extrabold text-4xl text-center font-sans">
        Hello, I'm <span class="text-indigo-700">Patrick</span>!
    </h1>
    <h2 class="text-indigo-400 text-2xl text-center mb-6">
        I build things for the <span class="font-bold text-indigo-300">call center industry</span>.
    </h2>
</div>

<div class="container px-4 max-w-lg mx-auto mt-6 text-center">
  <div class="w-100">
      <img class="w-auto mx-auto" src="/assets/images/master_plan.svg" title="Patrick Labbett" alt="Patrick Labbett">
  </div>
</div>

<div class="container px-4 py-6 w-100 mx-0 mt-10 text-center bg-indigo-100">

  <p class="text-xl font-bold text-gray-500 mx-auto max-w-lg items-center">
    <a href="https://notifi.us">
      <img class="inline-block" style="width:201px;height:43px;" src="/assets/images/notifius.png" title="NotifiUs, LLC" alt="NotfiUs, LLC">
    </a>
    <br>
    Technical consulting, software development, and documentation for call centers.
    <br>
    <a class="text-sm uppercase text-white rounded-lg inline-block shadow bg-purple-900 my-4 px-4 py-2 hover:bg-purple-700 border hover:text-purple-200" href="https://notifi.us/contact">
      Hire my company
    </a>
  </p>
 
</div>

<div class="container px-4 my-10 max-w-lg mx-auto mt-6 text-center">
  <div class="flex flex-wrap">
    <div class="md:w-1/3 sm:w-auto">
    </div>
    <div class="md:w-1/3 sm:w-auto">
    </div>
    <div class="md:w-1/3 sm:w-auto">
    </div>
  </div>
</div>

@include('_layouts.footer')

@endsection
