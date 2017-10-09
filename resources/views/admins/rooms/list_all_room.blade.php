@extends('layouts.admin')
@section('header')
	<h1>All room</h1>
	<a href="{{ url('admins/create') }}" class="btn btn-primary">Create Room</a>	
@stop
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="key_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
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
				<th>Services</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
                @foreach ($rooms as $room)
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
					<td><a href="{{url('admins/'.$room->id.'/edit')}}">Edit</a></td>
					<td><a href="{{url('admins/'.$room->id.'/delete')}}">Delete</a></td>
				</tr>
				@endforeach			
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</div>
@stop