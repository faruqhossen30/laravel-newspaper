<x-setting.setting-master title="Website Setting">

    <div class="p-4">
        <form action="{{ route('website.setting.store',$site->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-12 gap-4 ">

                <div class="col-span-12 lg:col-span-4 p-2 shadow">
                    {{-- <h2>site</h2> --}}
                    <x-form.input label="Site title" value="{{ $site->site_title }}" name="site_title" />
                    <x-form.input label="Tag Line" value="{{ $site->tag }}" name="tag" />
                    <x-form.input label="Working time" value="{{ $site->site_title }}" value="{{ $site->working_time }}"
                        name="working_time" />
                    <x-form.input label="Working Day" value="{{ $site->working_day }}" name="working_day" />
                    <x-form.input label="Info" value="{{ $site->info }}" name="info" />
                    <div class="col-span-2 lg:col-span-1">
                        <label for="myDropifylogo"
                        class="text-gray-500 dark:text-gray-200 text-sm font-medium">Logo</label>
                        <div class="my-2 md:flex">

                            <input class="dropify" type="file" id="myDropifylogo" value="{{ $site->logo }}"
                                data-default-file="{{ asset('storage/' . $site->logo) }}" name="logo">
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                        <label for="myDropifylogo"
                        class="text-gray-500 dark:text-gray-200 text-sm font-medium">Banner</label>
                        <div class="my-2 md:flex">
                            <input class="dropify" type="file" id="myDropify" value="{{ $site->banner }}"
                                data-default-file="{{ asset('storage/' . $site->banner) }}" name="banner">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4 p-2 shadow">

                    <div>
                        <label for="address"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Address</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </span>
                            <input type="text" id="address" name="address" value="{{ $site->address }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 focus:outline-none focus:ring-0"
                                placeholder="G5WF+3HF Jhenadaho">
                        </div>
                    </div>
                    <div>
                        <label for="email"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Email</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M17.834 6.166a8.25 8.25 0 1 0 0 11.668.75.75 0 0 1 1.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0 1 21.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 1 1-.82-6.26V8.25a.75.75 0 0 1 1.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 0 0-2.416-5.834ZM15.75 12a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input type="text" id="email" name="email" value="{{ $site->email }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 focus:outline-none focus:ring-0"
                                placeholder="faruqhossen30@gmail.com">
                        </div>
                    </div>
                    <div>
                        <label for="telephone_no"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Telephone No</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>
                            </span>
                            <input type="text" id="telephone_no" name="telephone_no"
                                value="{{ $site->telephone_no }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 focus:outline-none focus:ring-0"
                                placeholder="+013">
                        </div>
                    </div>
                    <div>
                        <label for="mobile_no"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Mobile No</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-phone" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                            </span>
                            <input type="text" id="mobile_no" name="mobile_no" value="{{ $site->mobile_no }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 focus:outline-none focus:ring-0"
                                placeholder="+8801000000000">
                        </div>
                    </div>

                    <div>
                        <label for="instagram_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Instagram
                            Link</label>
                        <div class="flex rounded-lg shadow-sm ">
                            <span
                                class="px-4  inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.    04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg>
                            </span>
                            <input type="text" id="instagram_link" name="instagram_link"
                                value="{{ $site->instagram_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 focus:outline-none focus:ring-0"
                                placeholder="www.instagram.com">
                        </div>
                    </div>
                    <div>
                        <label for="facebook_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Facebook
                            Link</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-200"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg>
                            </span>
                            <input type="text" id="facebook_link" name="facebook_link"
                                value="{{ $site->facebook_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 focus:outline-none focus:ring-0"
                                placeholder="www.facebook.com">
                        </div>
                    </div>
                </div>



                <div class="col-span-12 lg:col-span-4 p-2 shadow">
                    {{-- <h2>Social Media</h2> --}}

                    <div>
                        <label for="facebook_page_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Facebook Page
                            Link</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg></span>
                            <input type="text" id="facebook_page_link" name="facebook_page_link"
                                value="{{ $site->facebook_page_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                                placeholder="https://www.facebook.com/page/">
                        </div>
                    </div>
                    <div>
                        <label for="facebook_group_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Facebook Group
                            Link</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg></span>
                            <input type="text" id="facebook_group_link" name="facebook_group_link"
                                value="{{ $site->facebook_group_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                                placeholder="https://www.facebook.com/groups/feed">
                        </div>
                    </div>
                    <div>
                        <label for="twitter_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Twiter Link</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path
                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg></span>
                            <input type="text" id="twitter_link" name="twitter_link"
                                value="{{ $site->twitter_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                                placeholder="https://twitter.com/">
                        </div>
                    </div>
                    <div>
                        <label for="youtube_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Youtube
                            Link</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                </svg></span>
                            <input type="text" id="youtube_link" name="youtube_link"
                                value="{{ $site->youtube_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                                placeholder="https://www.youtube.com/">
                        </div>
                    </div>
                    <div>
                        <label for="intro_video_link"
                            class="block text-sm font-medium mb-2 text-gray-500 dark:text-gray-200">Intro Video
                            Link</label>
                        <div class="flex rounded-lg shadow-sm">
                            <span
                                class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                </svg></span>
                            <input type="text" id="intro_video_link" name="intro_video_link"
                                value="{{ $site->intro_video_link }}"
                                class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                                placeholder="intro_video_link">
                        </div>
                    </div>
                    {{-- <x-form.input label="Facebook Page Link" value="{{$site->facebook_page_link}}" name="facebook_page_link" />
                   <x-form.input label="Facebook Group Link" value="{{$site->twitter_link}}"  name="twitter_link" />
                   <x-form.input label="Linkedin Link" value="{{$site->linkedin_link}}"  name="linkedin_link" />
                   <x-form.input label="Youtube Link" value="{{$site->youtube_link}}"  name="youtube_link" />
                   <x-form.input label="Intro Video Link" value="{{$site->intro_video_link}}" name="intro_video_link" /> --}}
                </div>

            </div>


            <div>
                <x-form.submit-button />
            </div>
        </form>
    </div>


    @push('style')
        <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
        <style>
            .dropify-message p {
                font-size: 24px
            }
        </style>
    @endpush

    @push('script')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="{{ asset('js/dropify.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.dropify').dropify({
                    messages: {
                        'default': 'Drag and drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove': 'Remove',
                        'error': 'Ooops, something wrong happended.'
                    }
                });
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endpush

</x-setting.setting-master>
