{{-- @php

use EasyBanglaDate\Types\BnDateTime;

$bongabda = new BnDateTime($post->created_at, new DateTimeZone('Asia/Dhaka'));
$postdate = $bongabda->getDateTime()->format('l jS F Y');

@endphp --}}
@extends('layout.app')

{{-- @section('OG')

    <meta property="og:url" content="{{ route('single.post', $post->id) }}" />
    <meta property="og:type" content="post" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ strip_tags($post->content) }}" />
    <meta property="og:image" content="{{ asset('storage/' . $post->thumbnail) }}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dailyrunnernews" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ strip_tags($post->content) }} " />
    <meta property="og:image" content="{{ asset('storage/' . $post->thumbnail) }}" />
@endsection --}}


@section('content')
    <section class="container mx-auto bg-white">
        <div class="grid grid-cols-12 gap-8 p-4">
            <div class="col-span-12 lg:col-span-8">
                <div class="bg-gray-300 border-b border-gray-800">
                    <div class="flex p-4">
                        <a href="{{ route('homepage') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-blue-400">
                                <path
                                    d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path
                                    d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <h4>জাতীয়</h4>

                    </div>
                </div>
                <div class="grid grid-cols-12 gap-8">
                    <div class="col-span-12 py-2 lg:col-span-8">
                        <div class="pb-4">
                            <img src="{{ asset('photo') }}/21.jpg" alt="" class="w-full border border-gray-300">
                        </div>
                        <a href="#" class="text-lg lg:text-3xl text-sky-500 hover:text-red-900">দুদকের
                            প্রতিষ্ঠাবার্ষিকী
                            কাল : অভিযোগ ও সাজা দুটোই বেড়েছে</a>
                        <div class="py-2 leading-8 lg:py-4">
                            <p class="text-sm text-justify lg:text-xl">দুর্নীতি দমন কমিশনের (দুদক) ত্রয়োদশ
                                প্রতিষ্ঠাবার্ষিকী আগামীকাল মঙ্গলবার। নানা কর্মসূচির মধ্য দিয়ে দিবসটি পালন করবে দুদক।
                                সকাল সাড়ে নয়টায় কমিশনের প্রধান কার্যালয় প্রাঙ্গণে জাতীয় পতাকা ও কমিশনের পতাকা উত্তোলন
                                করবেন
                                <a href="#"
                                    class="text-sm lg:text-xl text-sky-600 hover:text-red-800">বিস্তারিত...</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="lg:py-2">
                            <div class="pb-2">
                                <img src="{{ asset('photo') }}/34.jpg" alt=""
                                    class="w-full p-1 border border-gray-300">
                            </div>
                            <a href="#" class="text-lg lg:text-xl text-sky-500 hover:text-red-900">সরকারি অফিসে ৩ লাখ
                                ৬০
                                হাজার পদ শূন্য</a>
                        </div>
                        <div class="lg:py-2">
                            <div class="pb-2">
                                <img src="{{ asset('photo') }}/35.jpg" alt=""
                                    class="w-full p-1 border border-gray-300">
                            </div>
                            <a href="#" class="text-lg lg:text-xl text-sky-500 hover:text-red-900">সরিজেন্ট এয়ারের
                                সপ্তম
                                প্রতিষ্ঠা বার্ষিকী</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 lg:gap-12">
                    <div class="col-span-12 lg:col-span-4">
                        <div class="py-2">
                            <div class="pb-2">
                                <img src="{{ asset('photo') }}/36.jpg" alt=""
                                    class="w-full p-1 border border-gray-300">
                            </div>
                            <a href="#" class="text-lg lg:text-xl text-sky-500 hover:text-red-900">স্পিকারের সঙ্গে
                                স্পেনের রাষ্ট্রদূতের সাক্ষাৎ</a>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="py-2">
                            <div class="pb-2">
                                <img src="{{ asset('photo') }}/37.jpg" alt=""
                                    class="w-full p-1 border border-gray-300">
                            </div>
                            <a href="#" class="text-lg lg:text-xl text-sky-500 hover:text-red-900">পুলিশের ১৩ এএসপিকে
                                বদলি</a>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="py-2">
                            <div class="pb-2">
                                <img src="{{ asset('photo') }}/38.jpg" alt=""
                                    class="w-full p-1 border border-gray-300">
                            </div>
                            <a href="#" class="text-lg lg:text-xl text-sky-500 hover:text-red-900">জামালপুরে হচ্ছে
                                বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</a>
                        </div>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="p-4 bg-slate-100">
                        @foreach ( $categorypost as $category)

                        @foreach ($category->posts as $post)
                        <div class="lg:flex lg:space-x-6">

                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt=""
                                    class="w-full h-auto p-1 border border-gray-300 lg:w-72 lg:h-40">
                                <div class="py-4 lg:pb-4 lg:py-0">
                                    <a href="#" class="text-lg lg:text-2xl text-sky-500 hover:text-red-900">বিমান
                                        {{$post->title}}</a>
                                    <p class="py-4 text-sm text-justify lg:text-lg lg:leading-12">{!!($post->description), 300!!}</p>
                                    <a href="{{route('single.post',$post->id)}}">
                                        <button
                                            class="p-2 text-white transition ease-in-out delay-150 rounded-md hover:bg-red-900 bg-sky-700 hover:translate-x-1 hover:scale-x-105">
                                            বিস্তারিত...</button>
                                    </a>
                                </div>


                        </div>
                        @endforeach
                        @endforeach
                    </div>

                </div>

            </div>


            @include('layout.latestpost')
        </div>
    </section>




    <script src="./flowbite.min.js"></script>
@endsection
