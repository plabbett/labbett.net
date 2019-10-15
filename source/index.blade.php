@extends('_layouts.master')
@section('title', 'Patrick Labbett')
@section('body')

<nav>
  <div class="container mx-auto px-4 py-2 flex justify-between items-center">
    <div class="ml-auto">
      <ul class="inline-flex">
        <li>
          <a title="@patricklabbett on Twitter" alt="@patricklabbett" class="px-4 hover:text-indigo-300 font-bold" href="https://twitter.com/patricklabbett">
            <i class="fab fa-twitter text-blue-600"></i> patricklabbett
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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


@endsection
