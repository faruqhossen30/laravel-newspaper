@php
    $categories = App\Models\Admin\Category\Category::with('subcategories')->get();
@endphp

<section class="container px-4 mx-auto bg-white">

    <nav class="bg-gray-800 border-gray-200 dark:bg-gray-400 dark:border-gray-700">
        <div class="items-center p-4 mx-auto">
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-400 md:dark:bg-gray-400 dark:border-gray-700">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('category.post', $category->id) }}">
                            <button id="dropdownNavbarLink{{ $category->id }}"
                                data-dropdown-toggle="dropdownNavbar{{ $category->id }}"
                                class="flex items-center justify-between w-full px-3 py-2 text-white rounded hover:text-gray-800 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">{{ $category->name }}
                                @if (count($category->subcategories) > 0)
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                                @endif
                            </button>
                            </a>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar{{ $category->id }}"
                                class="z-10 hidden font-normal bg-gray-800 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                                @if (count($category->subcategories) > 0)
                                    <ul class="py-2 text-sm text-white dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">

                                        @foreach ($category->subcategories as $subcategory)
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 hover:text-gray-800 md:hover:text-gray-500 dark:hover:bg-gray-600 dark:hover:text-white">{{ $subcategory->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                @endif

                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </nav>

</section>
