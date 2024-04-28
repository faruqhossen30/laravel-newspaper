@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Settingpage" />
        <x-button.button-plus route="{{ route('settingpage') }}" title="Create Settingpage" />
    </div>
@endsection
@section('content')
    <div class="flex flex-row-reverse py-2">

    </div>
    <div class="flex justify-between py-2">
        {{-- <x-dashboard.breadcrumb title="Settings" route="settingpage" /> --}}

        {{-- <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
            class="inline-flex items-center px-4 py-2 space-x-1 text-sm font-medium text-center text-gray-800 border border-gray-200 rounded-lg dark:text-gray-400 dark:bg-slate-900 dark:border-gray-800"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            <span>Create</span>
        </button> --}}

        <!-- Dropdown menu -->
        <div id="dropdownDivider"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            {{-- <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 divide-y-1" aria-labelledby="dropdownDividerButton">
                <li>
                    <a href="{{route('service.create')}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Service</a>
                </li>
                <li>
                    <a href="{{route('portfolio.create')}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Portfolio</a>
                </li>
            </ul> --}}
        </div>

    </div>
    <section class="container mx-auto bg-gray-100 border-2 rounded-md dark:bg-gray-800 dark:text-slate-400 dark:border-gray-500">
        <div class="flex items-center justify-between p-6 py-8 pl-4 border-b-2 border-gray-200 dark:border-gray-500">
            <div class="flex items-end">
                <h2 class="text-3xl font-semibold text-gray-500">Website Settings</h2>
                {{-- <span class="px-2 text-gray-400">1.0</span> --}}
            </div>
            <a href="{{route('website.setting')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-gray-500 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
            </a>
        </div>


        {{-- sidebar start --}}
        <div class="grid grid-cols-6">
            <div class="col-span-1 border dark:border-gray-500">
                {{-- sidebar start --}}
                <a href="{{ route('sitesetting') }}"
                    class="flex items-center p-2 text-base text-gray-900 border-b border-gray-200 shadow-sm dark:border-gray-500 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16" class="sidebaricon">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>

                    <span class="ml-3" sidebar-toggle-item>Site Settings</span>
                </a>

                <ul class="pb-2 space-y-2 border-t border-gray-200 shadow-sm dark:border-gray-500">
                    <li>
                        <a href="{{ route('chatsection') }}"
                            class="flex items-center p-2 text-base text-gray-900 border-b-2 dark:border-gray-500 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                              </svg>



                            <span class="ml-3 text-gray-600 rounded-lg hover:text-gray-800 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 " sidebar-toggle-item>Chat Section</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('website.setting')}}"
                            class="flex items-center p-2 text-base text-gray-900 border-b-2 dark:border-gray-500 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                              </svg>



                            <span class="ml-3 text-gray-600 rounded-lg hover:text-gray-800 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 " sidebar-toggle-item>Website Setting</span>
                        </a>
                    </li>

                </ul>
            </div>
            {{-- sidebar end --}}

            {{-- <div class="col-span-5 border-b dark:border-gray-500">
                <h3 class="px-4 py-2 border-b-2 dark:border-gray-500">Site Settings</h3>


            </div> --}}
        </div>
        {{-- sidebar end --}}
    </section>
    <div class="px-2 dark:text-slate-400">



    </div>
@endsection
