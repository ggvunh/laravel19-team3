@extends('layouts.admin')
@section('content')
<div class="container table-responsive">
	<span><strong>About: {!!count($rooms)!!} results<strong></span>
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
					<td>{!!$room->images!!}</td>
					<td><a href="{!!url('admins/'.$room->id)!!}">{!!$room->room_name!!}</a></td>
					<td>{!!number_format($room->room_price)!!}VND</td>
					<td>{!!$room->room_status ? 'Available' : 'Not Available'!!}</td>
					<td>{!!$room->description!!}</td>
					<td>{!!$room->amount_people!!}</td>
					<td>{!!$room->room_types->type_of_bed!!}</td>
					<td><a href="">Edit</a></td>
					<td><a href="">Delete</a></td>
				</tr>			
			</tbody>
		@endforeach
	</table>
</div>
@stop