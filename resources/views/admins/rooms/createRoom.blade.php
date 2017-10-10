@extends('layouts.admin')
@section('header')
	<h1>Create Room</h1>
@stop
@section('content')
	{!! Form::open(['url'=>'admins']) !!}
		@include('partials.forms.form')
	{!! Form::close() !!}
@stop