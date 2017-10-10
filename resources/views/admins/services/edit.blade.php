@extends('layouts.admin')
@section('header')
<h1>Edit {{!!$service->service_name!!}} </h1>
@stop
@section('content')
	{!! Form::model($service,['url'=>'admins/service/'.$service->id,'method'=>'put']) !!}
		@include('partials.forms.service')
	{!! Form::close() !!}
@stop