@extends('layouts.admin')
@section('header')
	<h1> {{$bookroom[1]->booking->booking_code}} Detail</h1>
@stop
@section('content')

	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Rooms at Booking Date</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
	            <table class="table table-striped table-hover">
	                <tr>
	          			<th>Room Name</th>
	                    <th>Room Type</th>
	                    <th>Room Price</th>
	          		</tr>
					@foreach($bookroom as $br)
					<tr>						
							<td><a href="{{ url('admins/bookings/'.$br->booking_id.'/'.$br->room_id) }}">{{$br->room->room_name}}</a></td>
							<td>{{$br->room->room_types->type_of_bed}}</td>
							<td>{{$br->room->room_price}}</td>						
					</tr>
					@endforeach		
          		</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop