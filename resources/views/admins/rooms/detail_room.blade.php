@extends('layouts.admin')
@section('header')
	<h1>Room {!!$room->room_name!!}</h1>	
@stop
@section('content')

	<img src="{!!url('/images/upload/rooms/'.$room->images)!!}" alt="" style='width: 550px; height: 30s0px; border:5px solid gray;''>
	<ul style="padding-top: 15px;">
		<li>
			<strong>Room Type </strong>: {!!$room->room_types->type_of_bed!!}
		</li>
		<li style="list-style: none;">
			<a href="{{url('admins/'.$room->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/'.$room->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a>
		</li>
		<li>
			<strong>Price </strong> : {!!number_format($room->room_price)!!}
		</li>
		<li>
			<strong> Status </strong> : 				
			{!!$room->room_status ? '<span class="label label-success">Available</span>' : '<span class="label label-danger">Not Available</span>'!!}
		</li>
		<li>
			<strong>Amount Person </strong>: <span class="label label-warning">{!!$room->amount_people!!}</span></li>
		<li>
			<strong>Decription </strong>:{!!$room->description!!}
		</li>
	</ul>
@stop