@extends('layouts.admin')
@section('header')
	<h1>Edit {{$roomtype->type_of_bed}} Type</h1>
@stop
@section('content')
	{!! Form::model($roomtype,['url'=>'admins/roomtypes/'.$roomtype->id,'method'=>'put']) !!}
		@include('partials.forms.roomtype')
	{!! Form::close() !!}
@stop