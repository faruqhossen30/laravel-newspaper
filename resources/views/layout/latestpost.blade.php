<div class="col-span-12 lg:col-span-4">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="grid grid-cols-6 -m-px text-sm font-medium text-center" id="default-styled-tab"
            data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
            role="tablist">
            <li class="col-span-6 bg-gray-400 lg:col-span-3 me-2" role="presentation">
                <button
                    class="lg:px-[38px] py-2 lg:text-2xl text-black text-base rounded-t-lg focus:bg-gray-300 focus:text-black focus:border-t-4"
                    id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab"
                    aria-controls="profile" aria-selected="false">সর্বশেষ সংবাদ</button>
            </li>
            <li class="col-span-6 bg-gray-400 lg:col-span-3 me-2" role="presentation">
                <button
                    class="lg:px-[36px] py-2 lg:text-2xl text-black text-base rounded-t-lg focus:bg-gray-300 focus:text-black focus:border-t-4 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                    aria-controls="dashboard" aria-selected="false">জনপ্রিয় সংবাদ</button>
            </li>
        </ul>
    </div>

    <div class="overflow-scroll default-styled-tab-content max-h-60">
        <div class="hidden rounded-lg dark:bg-gray-800" id="styled-profile" role="tabpanel"
            aria-labelledby="profile-tab">
            @foreach ($latestnews as $latest)
                <div class="flex p-1 border">
                    <a href="#" class="w-[200px] h-fixt">
                        <img src="{{ asset('storage/' . $latest->thumbnail) }}" alt=""
                            class="w-[120px] h-fixt">
                    </a>
                    <p class="p-2"><a href="{{route('single.post',$latest->id)}}" class=" prose">{{ $latest->title }}</a></p>
                </div>
            @endforeach

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the
                <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                    content</strong>. Clicking another tab will toggle the visibility of this one for the
                next. The tab JavaScript swaps classes to control the content visibility and styling.
            </p>
        </div>
    </div>
</div>
