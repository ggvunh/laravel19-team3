@extends('admins.layouts.master')
@section('content_admin')
<div class="container table-responsive">
	<form action="admins/search" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="search_room" class="form-control" placeholder="Search...">
		    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
		    </button>
		</div>
	</form>
	<table class="table table-striped table-hover ">
		<thead class="table-inverse">
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>Room Name</th>
				<th>Price</th>
				<th>Status</th>
				<th>Description</th>
				<th>Amount People</th>
				<th>Room Type</th>
				<th>Services</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		@foreach ($rooms as $room)
			<tbody>
				<tr>
					<th scope="row">{!!$dem++!!}</th>
					<td>{!!$room->images->url!!}</td>
					<td><a href="{!!url('admins/'.$room->id)!!}">{!!$room->room_name!!}</a></td>
					<td>{!!number_format($room->room_price)!!}VND</td>
					<td>{!!$room->room_status!!}</td>
					<td>{!!$room->description!!}</td>
					<td>{!!$room->amount_people!!}</td>
					<td>{!!$room->room_types->type_of_bed!!}</td>
					<td><a href="{!!url('admins/service_hotels/'.
					$room->service_hotels->service_name)!!}">{!!$room->service_hotels->service_name!!}</a></td>
					<td><a href="">Edit</a></td>
					<td><a href="">Delete</a></td>
				</tr>			
			</tbody>
		@endforeach
	</table>
</div>
@stop