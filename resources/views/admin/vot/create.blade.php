@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="vot" pageoneRoute="{{route('vot.index')}}" pagetwo="Create"  />
@endsection
@section('content')
<div class="flex flex-col gap-6 ">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('vot.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.textarea label=" Description" name="description" />
                <x-form.input label="Start Date" type="date" name="start_date" />
                <x-form.input label="End Date" type="date" name="end_date" />
				<x-form.submit-button />
		</form>
	</div>
</div>
@endsection
