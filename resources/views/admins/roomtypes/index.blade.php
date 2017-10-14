@extends('layouts.admin')
@section('header')
	<h1>Room Types List</h1>
@stop
@section('content')
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ url('admins/roomtypes/create') }}" class="btn btn-primary fa fa-plus"> Create Room Type</a>	
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tr>
				<th>#</th>
				<th>Room Type Name</th>
				<th>Description</th>
			</tr>
                @foreach ($roomtypes as $roomtype)
                <tr>
					<th scope="row">{!!$dem++!!}</th>
					<td><a href="{{url('admins/roomtypes/'.$roomtype->id)}}">{!!$roomtype->type_of_bed!!}</a></td>
					<td>{!!$roomtype->description!!}</td>
					<td><a href="{{url('admins/roomtypes/'.$roomtype->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/roomtypes/'.$roomtype->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a></td>
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