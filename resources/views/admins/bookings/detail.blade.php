@extends('layouts.admin')
@section('header')
	<h1> {{$bookroom[1]->booking->booking_code}} Detail</h1>
	<a href="{{url('admins/bookings')}}" class="btn btn-primary">Back to booking list</a>
@stop
@section('content')
	@foreach($bookroom as $br)
					<tr>						
							<td>
								<h3>{{$br->room->room_name}}</h3>
								<p><strong>Room Types: </strong>{{$br->room->room_types->type_of_bed}}</p>
								<p><strong>Room Prices: </strong>{{$br->room->room_price}} đ</p>
								<div class="box">
									<div class="box-header">
										<p class="box-title">Services </p>
									</div>									
									<div class="box-body table-sm">
										<table class="table table-sm table-hover">
											<tr>
												<th>Service Name</th>
												<th>Unit</th>
												<th>Price</th>
												<th>Action</th>
											</tr>
											@foreach($br->services as $service)									
											<tr>
												<td>{{$service->service_name}}</td>
												<td>{{$service->pivot->unit}}</td>
												<td>{{number_format($service->service_price*$service->pivot->unit)}}đ</td>
												<td>
													<a href="{{url('admins/bookings/'.$br->booking_id.'/'.$br->room_id.'/'.$service->id.'/delete')}}">Delete</a></td>
											</tr>
											@endforeach									
										</table>
										<a href="{{url('admins/bookings/'.$br->booking_id.'/'.$br->room_id.'/addservice')}}" class='btn btn-default pull-left'>Add Service</a>
									</div>
								</div>
							</td>				
					</tr>
	@endforeach		
	<a href="{{url('admins/bookings/'.$br->booking_id.'/checkout')}}" class='btn btn-primary'>Check Out</a>  	
	<a href="{{url('admins/bookings/'.$br->booking_id.'/cancel')}}" class='btn btn-primary' style="margin-left: 5px">Cancel Booking</a>  	
@stop