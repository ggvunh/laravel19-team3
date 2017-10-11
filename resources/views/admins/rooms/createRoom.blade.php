@extends('layouts.admin')
@section('header')
	<h1>Create Room</h1>
@stop
@section('content')

	{!! Form::open(['url'=>'admins','files' => true,'enctype' => 'multipart/form-data', 'id' => 'newHotnessForm']) !!}
		@include('partials.forms.form')
	{!! Form::close() !!}
@stop