@extends('layouts.admin')
@section('header')
	<h1>Edit {{$room->room_name}}</h1>
@stop
@section('content')
	{!! Form::model($room,['url'=>'admins','method'=>'put']) !!}
		@include('partials.forms.form')
	{!! Form::close() !!}
@stop