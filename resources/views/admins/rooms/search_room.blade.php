@extends('layouts.admin')

@section('content')
<div class="container table-responsive">
	<span>About {!!count($rooms)!!} results</span>

	<table class="table table-striped table-hover ">
		<thead class="table-inverse">
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>Room Name</th>
				<th>Price</th>
				<th>Status</th>
				<th>Amount People</th>
				<th>Room Type</th>
				<th>Action</th>
			</tr>
		</thead>
		@foreach ($rooms as $room)
			<tbody>
				<tr>
					<th scope="row">{!!$dem++!!}</th>
					<td>
						<img src="{!!url('/images/upload/rooms/'.$room->images)!!}" alt="" style='width: 50px; height: 30px;''>
					</td>
					<td><a href="{!!url('admins/'.$room->id)!!}">{!!$room->room_name!!}</a></td>
					<td>{!!number_format($room->room_price)!!}VND</td>
					<td>						
						{!!$room->room_status ? '<span class="label label-success">Available</span>' : '<span class="label label-danger">Not Available</span>'!!}
					</td>
					
					<td>{!!$room->amount_people!!}</td>
					<td>{!!$room->room_types->type_of_bed!!}</td>
					<td><a href="{{url('admins/'.$room->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/'.$room->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a></td>
				</tr>			
			</tbody>
		@endforeach
	</table>
	{!!$rooms->links()!!}
</div>
@stop