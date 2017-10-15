@extends('layouts.admin')
@section('header')
	<h1>Create New Room Type</h1>
@stop
@section('content')
	{!! Form::open(['url'=>'admins/roomtypes']) !!}
		@include('partials.forms.roomtype')
	{!! Form::close() !!}
@stop