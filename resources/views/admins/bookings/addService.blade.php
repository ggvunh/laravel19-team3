@extends('layouts.admin')
@section('header')
@stop
@section('content')
{!!Form::open(['url'=>'admins/bookings/'.$bookroom->booking_id.'/'.$bookroom->room_id])!!}
	<div class="form-group">
			{!! Form::label( "service_id", 'Choose service') !!} 
			<div class="form-controls">
				{!! Form::select("service_id",$services,null,['class'=>'form-control']) !!}
			</div>
			{!! Form::label("unit",'Number of Unit')!!}
			<div class="form-controls">
				{!!Form::text("unit",null,['class'=>'form-control'])!!}
			</div>
	</div>
	{!! Form::submit('Add Service',['class'=>'btn btn-primary pull-left']) !!}
{!!Form::close()!!}
@stop