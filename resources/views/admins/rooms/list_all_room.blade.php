@extends('layouts.admin')
@section('header')
	<h1>All room</h1>
	<a href="{{ url('admins/create') }}" class="btn btn-primary pull-right fa fa-plus"> Create Room</a>	
@stop
@section('search')
	@include('layouts.search')
@stop
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Rooms Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tr>
				<th>#</th>
				<th>Image</th>
				<th>Room Name</th>
				<th>Price</th>
				<th>Status</th>
				<th>Description</th>
				<th>Amount People</th>
				<th>Room Type</th>
				<th>Action</th>
			</tr>
                @foreach ($rooms as $room)
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
					<td>{!!$room->description!!}</td>
					<td>{!!$room->amount_people!!}</td>
					<td>{!!$room->room_types->type_of_bed!!}</td>
					<td><a href="{{url('admins/'.$room->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/'.$room->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a></td>
				</tr>
				@endforeach			
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         	{!! $rooms->links()!!}
          <!-- /.box -->
        </div>
      </div>
</div>
@stop