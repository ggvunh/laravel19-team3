@extends('layouts.admin')
@section('header')
	<h1>Check-out Confirm</h1>
@stop
@section('content')
	<section class="invoice">
		<div class="row">
	        <div class="col-xs-12">
	          <h2 class="page-header">
	            <i class="fa fa-globe"></i> Lotus Hotel.
	            <small class="pull-right">Date: {{date('d-m-y')}}</small>
	          </h2>
	        </div>
    	</div>
		
		<div class="row invoice-info">
			<div class="col-sm-4 invoice-col">
				<strong>Full Name: </strong>{{$bookroom[0]->booking->user->first_name}} {{$bookroom[0]->booking->user->last_name}}<br>
				<strong>Email: </strong> {{$bookroom[0]->booking->user->email}}<br>
				<strong>Phone Number: </strong> {{$bookroom[0]->booking->user->phone_number}} <br>
			</div>

			<div class="col-sm-4 invoice-col">
				<strong>Address: </strong> {{$bookroom[0]->booking->user->address}} <br>
				<strong>Province: </strong> {{$bookroom[0]->booking->user->province}} <br>
				<strong>City: </strong> {{$bookroom[0]->booking->user->city}} <br>
				<strong>Country: </strong> {{$bookroom[0]->booking->user->country}} <br>
			</div>

			<div class="col-sm-4 invoice-col">
				<strong>Booking ID: </strong> {{$bookroom[0]->booking->booking_code}} <br>
				<strong>Room Name: </strong> | @foreach ($bookroom as $br) {{$br->room->room_name}} | @endforeach<br>
			</div>

			<div class="row">
		        <div class="col-xs-12 table-responsive">			        
			        <table class="table table-striped">
			        	<tr>
							<th>Room Name</th>
							<th>Service Name</th>
							<th>Unit</th>
							<th>Price</th>
							</tr>
							@foreach($bookroom as $br)
								@foreach($br->services as $service)									
								<tr>
								<td>{{$br->room->room_name}}</td>
								<td>{{$service->service_name}}</td>
								<td>{{$service->pivot->unit}}</td>
								<td>{!!number_format($service->service_price * $service->pivot->unit)!!}đ</td>
								</tr>
								@endforeach
						    @endforeach        		
			        </table>
		        </div>
	      	</div>

	      	<div class="row">
	      		<div class="col-xs-6">
	      			<div class="table-responsive">
			            <table class="table">
			              <tr>
			                <th style="width:50%">Total Room Price:</th>
			                <td>
			                	{{number_format($roomtotal)}}đ
			            	</td>
			              </tr>
			              <tr>
			                <th>Services Total Price:</th>
			                <td>{{number_format($servicetotal)}}đ</td>
			              </tr>
			              <tr>
			                <th>Total:</th>
			                <td>{{number_format($roomtotal+$servicetotal)}}đ</td>
			              </tr>
			            </table>
	      			</div>
	      		</div>	
			</div>
			<a href="{{url('admins/bookings/'.$bookroom[0]->booking_id.'/checkout/confirm')}}" class="btn btn-primary pull-left">Confirm</a>
			<a href="{{url('admins/bookings/'.$bookroom[0]->booking_id)}}" class="btn btn-primary pull-left" style="margin-left: 5px">Cancel</a>
	</section>
@stop