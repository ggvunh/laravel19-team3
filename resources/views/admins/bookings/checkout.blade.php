@extends('layouts.admin')
@section('header')
	<h1>Check-out Confirm</h1>
@stop
@section('content')
	<section class="invoice">
		<div class="row">
	        <div class="col-xs-12">
	          <h2 class="page-header">
	            <i class="fa fa-credit-card"></i> Lotus Hotel.
	            <small class="pull-right">Date: {{date('d-m-y')}}</small>
	          </h2>
	        </div>
    	</div>
		
		<div class="row invoice-info">
			<div class="col-sm-4 invoice-col">
				<strong>Full Name: </strong>{{$booking->user->first_name}} {{$booking->user->last_name}}<br>
				<strong>Email: </strong> {{$booking->user->email}}<br>
				<strong>Phone Number: </strong> {{$booking->user->phone_number}} <br>
			</div>

			<div class="col-sm-4 invoice-col">
				<strong>Address: </strong> {{$booking->user->address}} <br>
				<strong>Province: </strong> {{$booking->user->province}} <br>
				<strong>City: </strong> {{$booking->user->city}} <br>
				<strong>Country: </strong> {{$booking->user->country}} <br>
			</div>

			<div class="col-sm-4 invoice-col">
				<strong>Booking ID: </strong> {{$booking->booking_code}} <br>
				<strong>Room Name: </strong> | @foreach($bookroom as $br) {{$br->room->room_name}} |@endforeach <br>
			</div>
			
			<div class="row">
		        <div class="col-xs-12 table-responsive">
			        <table class="table table-striped">
			        	<tr>
							<th>Service Name</th>
							<th>Unit</th>
							<th>Price</th>
							</tr>
							@foreach($bookroom as $br)
								@foreach($br->services as $service)									
								<tr>
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
			                <th style="width:50%">Room Price:</th>
			                <td>{{number_format($roomtotal)}}đ@if($booking->status==1) <i class="fa fa-check-square"></i>@endif</td>
			              </tr>
			              <tr>
			                <th>Services Total Price:</th>
			                <td>{{number_format($servicetotal)}}đ</td>
			              </tr>
			              <tr>
			                <th>Total:</th>
			                @if($booking->status == 1)
			                <td>{{number_format($servicetotal)}}đ</td>
			                @else
			                <td>{{number_format($servicetotal + $roomtotal)}}đ</td>
			              	@endif
			              </tr>
			            </table>
	      		</div>
	      	</div>	
		</div>
	</section>
@stop