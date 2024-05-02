@php
    use App\Models\Admin\Ads\Ads;
    $ads = Ads::first();
@endphp


<section class="container mx-auto bg-white">
    <div class="grid grid-cols-8 gap-8 p-4">
        <div class="col-span-8 lg:col-span-2">
            <div class="p-2 text-white bg-red-900 shadow-sm lg:py-4 shadow-gray-500">
                <a href="#" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-4 h-4 lg:w-5 lg:h-5 bi bi-menu-button-wide" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5z" />
                        <path
                            d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0M0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                    </svg>
                    <h4 class="text-base lg:text-xl">রাজনীতি</h4>
                </a>
            </div>
            <div class="py-4">
                <div class="shadow-md">
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/12.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">‘প্রধানমন্ত্রী পদত্যাগ করলে জনগণও তাকে ক্ষমা
                                করে দেবে’</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/13.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">সমাবেশ মঞ্চে শেখ হাসিনা</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/14.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">তারেকের জন্মদিনে কেক কাটবেন খালেদা</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/15.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">রিকশাচালকের নৌকা প্রেমের গল্প</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/16.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">আওয়ামী লীগের প্রতিনিধি দল রংপুর যাচ্ছে রোববার
                            </p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/17.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">৭ মার্চের ভাষণ লিখিত ছিল না : প্রধানমন্ত্রী
                            </p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/18.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">তা‌রেকের জন্ম‌দি‌নে কেক কাট‌লেন খা‌লেদা</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/19.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">জন্মদিনে তারেকের সুস্থতা কামনা করে খালেদার
                                টুইট</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/20.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">গুলশানে উপদেষ্টা পর্যায়ের বৈঠক ডেকেছেন খালেদা
                            </p>
                        </a>
                    </div>
                    <a href="#" class="flex items-center justify-end p-6 hover:text-green-600">
                        <span class="text-xl">আরো খবর.. </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="pb-4">
                <a href="#"><img src="{{ asset('storage/' . $ads->sidebar_ads) }}" alt=""
                        class="w-full"></a>
            </div>
            <div class="p-2 bg-red-900">
                <h4 class="text-2xl text-white">ফেসবুকে আমরা...</h4>
            </div>
            <div class="py-4">
                <div class="relative">
                    <img src="{{ asset('photo/') }}/thimbajar fb card.jpg" alt="w-full">
                    <div class="overflow-scroll default-styled-tab-content max-h-60">
                        <div class="py-1">
                            <a href="#"><img src="{{ asset('photo/') }}/map.jpg" alt=""
                                    class="w-full"></a>
                            <p>এই স্বাধীনতা দিবসে সেই বীর আত্মার প্রতি শ্রদ্ধা নিবেদন করি যারা আমাদের শান্তির জন্য
                                বীরত্বের সঙ্গে লড়াই করেছিলেন।</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 bg-red-900">
                <h4 class="text-2xl text-white">পুরাতন খবর</h4>
            </div>
            <div class="py-2">
                <form class="max-w-lg mx-auto">
                    <div class="flex">
                        <div class="relative w-full">
                            <input type="date" id="search-dropdown"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos, Design Templates..." required />
                            <button type="submit"
                                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span>খুজুন</span>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex items-center p-2 space-x-2 text-white bg-red-900 shadow-sm lg:py-4 shadow-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="w-4 h-4 lg:w-5 lg:h-5 bi bi-menu-button-wide" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5z" />
                    <path
                        d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0M0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                </svg>
                <h4 class="text-base lg:text-xl">সাহিত্য</h4>
            </div>
            <div class="py-4">
                <div class="shadow-md">
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/1.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">রুদ্র মুহম্মদ শহিদুল্লাহর জন্মদিন আজ</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/2.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">কবি শামসুর রাহমানের ৮৯তম জন্মদিন আজ</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/3.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">বিল নিয়ে খেদ হাসপাতালে ভর্তি তসলিমার</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/4.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">১৬ নভেম্বর ঢাকা লিট ফেস্ট শুরু</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/5.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">প্রলয় </p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/6.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">৭ মার্চের ভাষণের ওপর বইয়ের মোড়ক উন্মোচন </p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/7.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">আরব সভ্যতা টিকবে না : আদোনিস</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            <img src="{{ asset('photo/') }}/8.jpg" alt="" class="w-[120px] h-fixt">
                            <p class="p-2 text-xl hover:text-red-600">কবিতার খোঁজে সম্মাননা পেলেন ১০ তরুণ কবি</p>
                        </a>
                    </div>
                    <div class="p-1 border-b border-gray-400 border-dashed">
                        <a href="#" class="flex">
                            /

                            <p class="p-2 text-xl hover:text-red-600">জীবনে প্রথম সামনাসামনি আবৃত্তি শোনা</p>
                        </a>
                    </div>
                    <a href="#" class="flex items-center justify-end p-6 hover:text-green-600">
                        <span class="text-xl">আরো খবর.. </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="pb-4">
                <a href="#"><img src="{{ asset('storage/' . $ads->posts_ads) }}" alt=""
                        class="w-full"></a>
            </div>
        </div>
        <div class="col-span-8 lg:col-span-6">

            <div class="grid grid-cols-12 gap-8">
                @foreach (json_decode($categorypost) as $catpost)
                    @if (count($catpost->posts) > 0)
                        <div class="col-span-12 lg:col-span-6">
                            <div class="p-2 text-white bg-red-900 shadow-sm lg:py-4 shadow-gray-500">
                                <a href="#" class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="w-4 h-4 bi bi-menu-button-wide lg:w-5 lg:h-5" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5z" />
                                        <path
                                            d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0M0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                                    </svg>
                                    <h4 class="text-base lg:text-xl">{{ $catpost->name }}</h4>
                                </a>
                            </div>


                            <div class="shadow-md">
                                @foreach ($catpost->posts as $key => $post)
                                    @if ($key == 0)
                                        <a href="#"><img src="{{ asset('storage/' . $post->thumbnail) }}"
                                                alt="" class="w-full border"></a>
                                    @endif

                                    @if ($key == 0)
                                        <div class="p-2 border-b border-gray-400 border-dashed">
                                            <a href="#"
                                                class="text-base lg:text-2xl hover:text-red-800">{{ $post->title }}</a>
                                        </div>
                                    @endif
                                    @if ($key != 0)
                                        <div
                                            class="flex items-center p-2 py-4 space-x-1 border-b border-gray-400 border-dotted">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 text-red-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                            </svg>
                                            <a href="#" class="text-base lg:text-2xl">{{ $post->title }}</a>
                                        </div>
                                    @endif
                                @endforeach
                                <a href="#" class="flex items-center justify-end p-6 hover:text-green-600">
                                    <span class="text-base lg:text-xl">আরো খবর.. </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 lg:w-6 lg:h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="py-4">
                <a href="#"><img src="{{ asset('photo/') }}/add.gif" alt="" class="w-full"></a>
            </div>
        </div>
    </div>
</section>
