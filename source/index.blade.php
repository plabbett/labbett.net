@extends('_layouts.master')
@section('title', 'Patrick Labbett')
@section('body')

@include('_layouts.nav')

<div class="telephony-rules">
    <div class="px-4 mx-auto max-w-lg text-center mb-8">

        <h1 class="font-semibold text-4xl text-center text-gray-300">
            Hello, I'm <span class="italic text-white">Patrick</span>.
        </h1>

        <h2 class="text-purple-700 text-2xl text-center mb-6">
            I build things for the <span class="whitespace-no-wrap font-bold text-purple-600">call center industry</span>.
        </h2>

    </div>

    <div class="my-6 px-4 max-w-lg mx-auto text-center">
      <div class="w-100 pb-12">

        <img class="w-auto mx-auto" id="patricklabbett" src="/assets/images/voice.svg" title="Patrick Labbett" alt="Patrick Labbett">

      </div>
    </div>
</div>

<div class="w-12/12 px-4 py-8 mt-0 mx-0 text-center bg-gray-200 shadow-inner">

  <div class="container text-xl font-semibold text-gray-500 mx-auto max-w-lg text-center">

      <a href="https://notifi.us">
        <img class="inline-block w-64" src="/assets/images/notifius.png" title="NotifiUs, LLC" alt="NotfiUs, LLC">
      </a>

      <p class="text-gray-400">
        Technical consulting, software development, and engineering for call centers and answering services.
      </p>

      <a alt="NotifiUs, LLC" class="rounded-sm focus:shadow-outline text-sm font-bold uppercase text-gray-100 inline-block shadow bg-purple-700 my-4 p-4 hover:bg-purple-900 hover:text-white" href="https://notifi.us/contact">
          Level up your call center
      </a>

  </div>
 
</div>

<div class="bg-gray-100 px-4 py-8 mx-0 ">
    <div class="flex flex-wrap max-w-4xl mx-auto text-center">

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://notifi.us">
                <img class="w-10/12 mx-auto" src="/assets/images/notifius.png" title="Technical consulting, engineering, and implementation" alt="notifi.us">
            </a>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://callcenterkpi.com">
                <img class="w-10/12 mx-auto" src="/assets/images/callcenterkpi.png?1=2" title="Real-time Call Center KPI Dashboard" alt="callcenterkpi.com">
            </a>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://calltheory.com">
                <img class="w-10/12 mx-auto" src="/assets/images/call-theory.png" title="Documentation and support for your technical staff" alt="calltheory.com">
            </a>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://wctp.io">
                <img class="w-10/12 mx-auto" src="/assets/images/wctpio.png" title="Open-source SMS aggregator for Amtelco systems" alt="wctp.io">
            </a>
        </div>

    </div>
</div>

@include('_layouts.footer')

@endsection
