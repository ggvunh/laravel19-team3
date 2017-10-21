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
				<strong>Full Name: </strong>{{$bookroom->booking->user->first_name}} {{$bookroom->booking->user->last_name}}<br>
				<strong>Email: </strong> {{$bookroom->booking->user->email}}<br>
				<strong>Phone Number: </strong> {{$bookroom->booking->user->phone_number}} <br>
			</div>

			<div class="col-sm-4 invoice-col">
				<strong>Address: </strong> {{$bookroom->booking->user->address}} <br>
				<strong>Province: </strong> {{$bookroom->booking->user->province}} <br>
				<strong>City: </strong> {{$bookroom->booking->user->city}} <br>
				<strong>Country: </strong> {{$bookroom->booking->user->country}} <br>
			</div>

			<div class="col-sm-4 invoice-col">
				<strong>Booking ID: </strong> {{$bookroom->booking->booking_code}} <br>
				<strong>Room Name: </strong> {{$bookroom->room->room_name}} <br>
			</div>

			<div class="row">
		        <div class="col-xs-12 table-responsive">
			        <table class="table table-striped">
			        	<tr>
							<th>Service Name</th>
							<th>Unit</th>
							<th>Price</th>
							</tr>
							@foreach($bookroom->services as $service)									
							<tr>
							<td>{{$service->service_name}}</td>
							<td>{{$service->pivot->unit}}</td>
							<td>{!!$price=number_format($service->service_price * $service->pivot->unit)!!}đ</td>
							</tr>
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
			                <td>{{$roomprice=number_format($bookroom->room->room_price)}}đ</td>
			              </tr>
			              <tr>
			                <th>Services Total Price:</th>
			                <td>{{number_format($sumservice)}}đ</td>
			              </tr>
			              <tr>
			                <th>Total:</th>
			                <td>{{number_format($roomprice+$sumservice)}}đ</td>
			              </tr>
			            </table>
	      		</div>
	      	</div>	
		</div>
	</section>
@stop