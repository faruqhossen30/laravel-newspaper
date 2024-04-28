@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="vot" pageoneRoute="{{route('vot.index')}}" pagetwo="Create"  />
@endsection
@section('content')
<div class="flex flex-col gap-6 ">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('vot.update',$vot->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-form.textarea label=" Description" name="description" value="{{$vot->description}}" />
                <x-form.input label="Start Date" type="date" name="start_date" value="{{$vot->start_date}}" />
                <x-form.input label="End Date" type="date" name="end_date" value="{{$vot->end_date}}" />
				<x-form.submit-button title="Update" />
		</form>
	</div>
</div>
@endsection
