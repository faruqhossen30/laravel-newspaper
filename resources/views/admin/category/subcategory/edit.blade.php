@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="SubCategory" pageoneRoute="{{ route('subcategory.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('subcategory.update', $subcategory->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="py-1">
                            <label for="category_id">Select Category</label>
                            <select name="category_id" id="category_id"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $subcategory->category_id) selected @endif>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-form.input label="subCategory Name" name="name" value="{{ $subcategory->name }}" />
                        <x-form.textarea class="" label="Description" name="description" cols="30" rows="10"
                            value="{{ $subcategory->description }}"></x-form.textarea>
                        <div class="col-span-3 pt-1 space-y-2">
                            <label for="thumbnail"
                                class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                            <input name="thumbnail" class="dropify" type="file" id="myDropify"
                                data-default-file="{{ asset('storage/' . $subcategory->thumbnail) }}">
                        </div>
                        <x-form.submit-button title="Update" />
                    </form>
                </div>
            </div>
        @endsection

        @push('styles')
            <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
            <style>
                .dropify-message p {
                    font-size: 24px
                }
            </style>
        @endpush

        @push('scripts')
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

                });
            </script>
        @endpush
