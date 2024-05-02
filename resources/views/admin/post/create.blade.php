@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Post" pageoneRoute="{{ route('post.index') }}" pagetwo="Create" />
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class=" space-y-1">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Title" name="title" />

                                <div>
                                    <label class="text-gray-500 dark:text-gray-500 text-sm font-medium mb-2 ">Description</label>
                                    <textarea name="description" class="ckeditor" id="editor" cols="30" rows="10"></textarea>
                                </div>


                                <div class="space-y-1 py-2">
                                    <label for=""
                                        class="text-gray-500 dark:text-gray-500 text-sm font-medium mb-2 ">Video
                                        IFrameTag</label>
                                    <textarea id="" name="video_ifrem"
                                        class="iframe py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                        rows="5" placeholder="Video IFrame Tag">
                                     </textarea>
                                </div>

                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">

                                <div>
                                    <label class="text-gray-500 dark:text-gray-500 text-sm font-medium mb-2 ">Thumbnail</label>
                                    <input class="dropify" type="file" id="myDropify" name="thumbnail">
                                </div>
                                <x-form.input label="Meta Title" name="meta_title" />
                                <x-form.textarea label="Meta Description" name="meta_description" />
                                <x-form.input label="Meta Keyword" name="keyword" />

                                <div class="py-2">
                                    <label for="category_ids" class="block text-sm font-medium mb-2 dark:text-white">Select
                                        Category</label>

                                    <select id="category_ids" name="category_ids[]"
                                        class="js-example-basic-multiple py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                        multiple="multiple">
                                        <option>Select Categories</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="py-2">
                                    <label for="sub_category_id" class="block text-sm font-medium mb-2 dark:text-white">Select
                                      sub  Category</label>

                                    <select id="sub_category_id" name="sub_category_ids[]"
                                        class="js-example-basic-multiple py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                        multiple="multiple">
                                        <option>Select sub Categories</option>
                                        @foreach ($subcategories as $subcat)
                                            <option value="{{ $subcat->id }}">{{ $subcat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="Visibility"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Visibility
                                </label>
                                <select id="Visibility" name="visibility"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    <option value="">Select status</option>
                                    <option value="show">show</option>
                                    <option value="hide">hide</option>
                                    <option value="draft">draft</option>
                                </select>
                                <x-form.select-status />
                            </div>
                        </div>
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('style')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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


<script>
    var category = $('select[name="category_ids"]');
    var subcategory = $('select[name="sub_category_ids"]');


    $(document).on('change', 'select[name="category_ids"]', function() {
        console.log('just for test');
            let subcategoryid = $(this).val()
            console.log(subcategoryid);

            $.ajax({
                url: `/category-to-subcategory/${subcategoryid}`,
                type: 'GET',
                success: function(data) {
                    subcategory.empty()
                    subcategory.append(data)
                },
            });

        }); // change event end

</script>
@endpush
