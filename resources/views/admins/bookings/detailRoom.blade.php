@extends('layouts.admin')
@section('header')
	<h1>{{$bookroom->room->room_name}} Detail</h1>
	<a href="{{url('admins/bookings/'.$bookroom->booking_id)}}" class='btn btn-primary'>Back to Booking Detail</a>
@stop
@section('content')
	<div class="box">
			<div class="box-header">
		              <h3 class="box-title">Services Table</h3>
		              <a href="#" class='btn btn-default'>Add Service</a>              
		            </div>
			<div class="box-body table-responsive no-padding">
			            <table class="table table-striped table-hover">
			                <tr>
			          			<th>Service Name</th>
			                    <th>Unit</th>
			          		</tr>
							@foreach($bookroom->services as $service)
							<tr>						
									<td>{{$service->service_name}}</td>
									<td>{{$service->pivot->unit}}</td>						
							</tr>
							@endforeach
		          		</table>
		            </div>
	</div>
@stop