@extends('_layouts.master')
@section('title', 'Patrick Labbett')
@section('body')

@include('_layouts.nav')

<div class="container px-4 mx-auto max-w-lg text-center mt-8">
    <h1 class="text-indigo-800 font-extrabold text-4xl text-center font-sans">
        Hello, I'm <span class="text-indigo-700">Patrick</span>!
    </h1>
    <h2 class="text-indigo-400 text-2xl text-center mb-6">
        I build things for the <span class="whitespace-no-wrap font-bold text-indigo-300">call center industry</span>.
    </h2>
</div>

<div class="container px-4 max-w-lg mx-auto mt-6 text-center">
  <div class="w-100">
      <img class="w-auto mx-auto opacity-75" src="/assets/images/master_plan.svg" title="Patrick Labbett" alt="Patrick Labbett">
  </div>
</div>

<div class="w-12/12 px-4 py-8 mt-10 mx-0 text-center bg-gray-200 shadow-inner">

  <div class="container text-xl font-semibold text-gray-500 mx-auto max-w-lg text-center">
    <a href="https://notifi.us">
      <img class="inline-block w-64" src="/assets/images/notifius.png" title="NotifiUs, LLC" alt="NotfiUs, LLC">
    </a>
    <br>
    Technical consulting, software development, and engineering for call centers and answering services.
    <br>
    <a alt="NotifiUs, LLC" class="rounded-sm focus:shadow-outline text-sm font-bold uppercase text-gray-100 inline-block shadow bg-purple-700 my-4 p-4 hover:bg-purple-900 hover:text-white" href="https://notifi.us/contact">
      Level up your call center
    </a>
  </div>
 
</div>

<div class="bg-gray-400 px-4 py-8 mx-0 ">
    <div class="flex flex-wrap max-w-4xl mx-auto text-center">
        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://notifi.us">
                <img class="w-10/12 mx-auto" src="/assets/images/notifius.png" title="Technical consulting, engineering, and implementation" alt="notifi.us">
            </a>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://callcenterscore.com">
                <img class="w-10/12 mx-auto" src="/assets/images/callcenterscore.png" title="Transparent call center performance scoring" alt="callcenterscore.com">
            </a>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://callcentertrunk.com">
                <img class="w-10/12 mx-auto" src="/assets/images/callcentertrunk.png" title="Subscription box for call centers" alt="callcentertrunk.com">
            </a>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://hourlycheck.com">
                <img class="w-10/12 mx-auto" src="/assets/images/hourlycheck.png" title="Make sure your SMS, email, paging, fax, and website are up" alt="hourlycheck.com">
            </a>
        </div>
    </div>
</div>


<div class="bg-gray-800 px-4 py-8 mx-0 ">
    <div class="flex flex-wrap max-w-4xl mx-auto text-center">

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

        <div class="w-full sm:w-1/2 lg:w-1/4 mx-auto my-3">
            <a href="https://tas.ninja">
                <img class="w-10/12 mx-auto" src="/assets/images/tasninja.png" title="Security awareness training for call centers" alt="tasninja.com">
            </a>
        </div>


    </div>
</div>

@include('_layouts.footer')

@endsection
