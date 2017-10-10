@extends('layouts.admin')
@section('header')
<h1>Create New Service</h1>
@stop
@section('content')
	{!! Form::open(['url'=>'admins/service']) !!}
		@include('partials.forms.service')
	{!! Form::close() !!}
@stop