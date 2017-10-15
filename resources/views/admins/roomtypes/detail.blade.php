@extends('layouts.admin')
@section('header')
	<h1>{!! $roomtype->type_of_bed !!}</h1>
@stop
@section('content')
	<ul style="padding-top: 15px;">
		<li><p><strong>Description: </strong> {!! $roomtype->description !!}</p></li>
		<li style="list-style: none;">
			<a href="{{url('admins/'.$roomtype->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/'.$roomtype->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a>
		</li>
@stop