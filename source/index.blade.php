@extends('_layouts.master')
@section('title', 'Patrick Labbett')
@section('body')

@include('_layouts.nav')

<div class="telephony-rules">
    <div class="px-4 mx-auto max-w-lg text-center mb-8">
        <h1 class="hello text-indigo-800 font-black text-4xl text-center">
            Hello, I'm <span class="text-indigo-700">Patrick</span>!
        </h1>
        <h2 class="text-indigo-400 text-2xl text-center mb-6">
            I build things for the <span class="whitespace-no-wrap font-bold text-indigo-300">call center industry</span>.
        </h2>
    </div>

    <div class="my-6 px-4 max-w-lg mx-auto text-center">
      <div class="w-100 pb-12">

      <img class="w-auto mx-auto" id="patricklabbett" src="/assets/images/voice.svg" title="Patrick Labbett" alt="Patrick Labbett">

      </div>
    </div>
</div>
<!--
<div class="w-12/12 px-4 py-8 mt-16 mx-0 text-center bg-gray-300">
    <h2 class="text-gray-500 text-2xl font-black text-center mt-6">
        Support my work!
    </h2>
   <p class="mx-auto max-w-2xl text-gray-500">
       Sponsor my open-source work directly on Github or purchase items from my store.
   </p>
    <div class="container text-xl font-semibold text-gray-500 mx-auto max-w-lg text-center">
        <div class="flex flex-wrap max-w-6xl mx-auto text-center">
            <div class="w-full lg:w-1/2 mx-auto my-3">
                <a class="hover:bg-white hover:text-indigo-600 border-2 border-text-200 text-lg inline-block p-3 bg-gray-100 text-gray-800 rounded shadow-sm"  href="https://github.com/sponsors/plabbett">
                    <i class="fas fa-heart text-pink-500"></i> Sponsor me on Github
                </a>
            </div>

            <div class="w-full lg:w-1/2 mx-auto my-3">
                <a class="hover:bg-white hover:text-indigo-600 border-2 border-text-200 text-lg inline-block p-3 bg-gray-100 text-gray-800 rounded shadow-sm"  href="https://store.calltheory.com">
                    <i class="fas fa-shopping-cart text-green-500"></i> Buy my telephone art
                </a>
            </div>
        </div>

    </div>
    <small class="text-indigo-600 font-bold">
        Thank you so much! <i class="far fa-heart text-pink-600"></i>
    </small>
</div>
-->

<div class="w-12/12 px-4 py-8 mt-0 mx-0 text-center bg-gray-200 shadow-inner">

  <div class="container text-xl font-semibold text-gray-500 mx-auto max-w-lg text-center">
      <h2 class="text-gray-400 text-2xl font-black text-center mb-6">
          Hire my company!
      </h2>
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
