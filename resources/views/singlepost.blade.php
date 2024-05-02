@php

use EasyBanglaDate\Types\BnDateTime;

$bongabda = new BnDateTime($post->created_at, new DateTimeZone('Asia/Dhaka'));
$postdate = $bongabda->getDateTime()->format('l jS F Y');

@endphp
@extends('layout.app')

@section('OG')
    <!-- Facebook & Linkedit Open Graph -->
    <meta property="og:url" content="{{ route('single.post', $post->id) }}" />
    <meta property="og:type" content="post" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ strip_tags($post->content) }}" />
    <meta property="og:image" content="{{ asset('storage/' . $post->thumbnail) }}" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dailyrunnernews" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ strip_tags($post->content) }} " />
    <meta property="og:image" content="{{ asset('storage/' . $post->thumbnail) }}" />
@endsection


@section('content')
<section class="container mx-auto bg-white">
  <div class="grid grid-cols-12 gap-8 p-4">
    <div class="col-span-12 lg:col-span-8">
      <a href="#">
        <img src="{{ asset('photo/') }}/add.gif" alt="" class="w-full">
      </a>
      <div class="py-2">
        <div class="flex bg-gray-300">
            <div class="bg-orange-600">
                <a href="{{route('homepage')}}" class="flex p-2 px-4 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg>
                    <h4 class="text-lg text-white">প্রচ্ছদ</h4>
                </a>
            </div>
            <div class="bg-gray-600">
                <a href="#" class="flex p-2 px-4 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                      </svg>
                    <h4 class="text-lg text-white">লিড নিউজ</h4>
                </a>
            </div>
        </div>
      </div>
      <h4 class="py-4 text-3xl font-bold">{{$post->title}}</h4>
      <div class="bg-gray-300">
        <div class="flex p-4">
            <span class="text-lg font-medium">আপডেট টাইম : {{$postdate}} </span>
            <span class="px-2 text-lg">/</span>
            {{-- <span class="text-lg font-medium"> ১৩২০ বার</span> --}}
        </div>
      </div>
      <div class="my-4">
        <div class="bg-gray-400">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="ফাইল ছবি" title="ফাইল ছবি" class="w-full">
            <h4 class="img_text">
                <a href="#" class="p-2 text-xl text-white">ফাইল ছবি</a>
            </h4>
        </div>
      </div>
      <div class="py-4">
        <p class="pb-4 text-xl leading-10 text-justify">{!!$post->description!!}</p>

      </div>
      <a href="#">
        <img src="{{ asset('photo/') }}/add.gif" alt="" class="w-full">
      </a>
      <div class="py-4 border-b border-gray-200">
        <span class="text-2xl font-bold">খবরটি শেয়ার করুন..</span>
      </div>
      <div class="py-4">

        {{-- <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singleblog', $post->slug) }}"
            class="inline-flex items-center p-4 text-sm font-medium text-center text-white bg-white rounded-full me-2">
            <img src="{{ asset('img/icon/facebook-app-symbol.png') }}" class="w-4" alt="">
        </a>

        <a href="https://twitter.com/intent/tweet?url={{ route('singleblog', $post->slug) }}"
            class="inline-flex items-center p-4 text-sm font-medium text-center text-white bg-white rounded-full me-2">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
            </svg>
        </a>


        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('singleblog', $post->slug) }}"
            class="inline-flex items-center p-4 text-sm font-medium text-center text-white bg-white rounded-full me-2">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                <path
                    d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z">
                </path>
            </svg>
        </a> --}}







        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('single.post', $post->id) }}" class="text-white bg-[#3b5998] hover:bg-white hover:text-black hover:border-gray-800 hover:border focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
            <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
            </svg> <h4 class="text-2xl font-bold">Facebook</h4></a>

        <a href="https://twitter.com/intent/tweet?url={{ route('single.post', $post->id) }}" class="text-white bg-[#1da1f2] hover:bg-white hover:border-gray-800 hover:border hover:text-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
            <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
            </svg> <h4 class="text-2xl font-bold">Twitter</h4> </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('single.post', $post->slug) }}" class="text-white bg-[#3b5998] hover:bg-white hover:border-gray-800 hover:border hover:text-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
            <svg class="w-6 h-6 font-bold dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
              </svg><h4 class="text-2xl font-bold"> Linkedin</h4> </a>
        <button type="button" class="text-white bg-[#fc7540] hover:bg-white hover:border-gray-800 hover:border hover:text-[#fc7540]/90 focus:ring-4 focus:outline-none focus:ring-[#fc7540]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#fc7540]/55 me-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
              </svg><h4 class="text-2xl font-bold"> Instagram</h4> </button>
        <button type="button" class="text-white bg-[#fc4040] hover:bg-white hover:border-gray-800 hover:border hover:text-[#fc4040]/90 focus:ring-4 focus:outline-none focus:ring-[#fc4040]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#fc4040]/55 me-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
              </svg><h4 class="text-2xl font-bold"> YouTube</h4> </button>
        <a href="https://pinterest.com/pin/create/link/?url={{ route('single.post', $post->id) }}" class="text-white bg-red-800 hover:bg-white hover:border-gray-800 hover:border hover:text-red-800 focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-red-800 me-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-pinterest" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0"/>
              </svg><h4 class="text-2xl font-bold"> Pinterest</h4> </a>
            <a href="#" class="text-white bg-[#24292F] hover:bg-white hover:border-gray-800 hover:border hover:text-black focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 me-2 mb-2">
            <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
            </svg><h4 class="text-xl">Github</h4></a>
      </div>
      <div class="bg-sky-700">
        <h4 class="p-4 text-2xl text-white">এ ক্যাটাগরীর আরো সংবাদ</h4>
      </div>
      <div class="grid grid-cols-12 gap-8 py-2">
        <div class="col-span-4 pb-4 border-t border-blue-800">
            <img src="{{ asset('photo/') }}/28.jpg" alt="">
            <img src="{{ asset('photo/') }}/31.jpg" alt="">
        </div>
        <div class="col-span-4 pb-4 border-t border-blue-800">
            <img src="{{ asset('photo/') }}/29.jpg" alt="">
            <img src="{{ asset('photo/') }}/32.jpg" alt="">
        </div>
        <div class="col-span-4 pb-4 border-t border-blue-800">
            <img src="{{ asset('photo/') }}/30.jpg" alt="">
            <img src="{{ asset('photo/') }}/33.jpg" alt="">
        </div>
      </div>
    </div>


    <div class="col-span-12 lg:col-span-4">
      <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="grid grid-cols-6 -m-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
          <li class="col-span-6 bg-gray-400 lg:col-span-3 me-2" role="presentation">
            <button class="lg:px-[38px] py-2 lg:text-2xl text-black text-base rounded-t-lg focus:bg-gray-300 focus:text-black focus:border-t-4" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">সর্বশেষ সংবাদ</button>
          </li>
          <li class="col-span-6 bg-gray-400 lg:col-span-3 me-2" role="presentation">
            <button class="lg:px-[36px] py-2 lg:text-2xl text-black text-base rounded-t-lg focus:bg-gray-300 focus:text-black focus:border-t-4 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">জনপ্রিয় সংবাদ</button>
          </li>
        </ul>
      </div>

      <div class="overflow-scroll default-styled-tab-content max-h-60">
        <div class="hidden rounded-lg dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">


            @foreach ($latestnews as $latest)
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('storage/' . $latest->thumbnail) }}" alt=""
                        class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="{{route('single.post',$latest->id)}}" class=" prose">{{ $latest->title }}</a></p>
            </div>
        @endforeach
{{--
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/1.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div> --}}
            {{-- <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/2.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div>
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/3.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div>
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/4.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div>
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/5.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div> onmouseover="this.stop();" onmouseout="this.start();" --}}

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/3.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div>
            <div class="flex p-1 border">
                <a href="#" class="w-[200px] h-fixt">
                    <img src="{{ asset('photo/') }}/4.jpg" alt="" class="w-[120px] h-fixt">
                </a>
                <p class="p-2"><a href="#" class="text-xl">৫ ধরনের ছুটির সুবিধাসহ আর্থিক প্রতিষ্ঠানে চাকরির সুযোগ</a></p>
            </div>
            <div class="flex p-1 border">
        </div>
      </div>
    </div>
  </div>
</section>




<script src="./flowbite.min.js"></script>


@endsection
