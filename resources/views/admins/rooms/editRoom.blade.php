@extends('layouts.admin')
@section('header')
	<h1>Edit {{$room->room_name}}</h1>
@stop
@section('content')
	{!! Form::model($room,['url'=>'admins','method'=>'put','files' => true,'enctype' => 'multipart/form-data']) !!}
		@include('partials.forms.form')
	{!! Form::close() !!}
@stop