@extends('layouts.admin')
@section('header')
	<h1>All Services</h1>
@stop
@section('content')
	<div class="box">
	<div class="box-header">
		<a href="{{ url('admins/service/create') }}" class="btn btn-primary fa fa-plus"> Create Service</a>
	</div>
	
	<div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tr>
				<th>#</th>
				<th>Service Name</th>
				<th>Service Price</th>
				<th>Description</th>
				<th>Action</th>				
			</tr>
                @foreach ($services as $service)
                <tr>
					<th scope="row">{!!$dem++!!}</th>
					<td><a href="{{url('admins/service/'.$service->id)}}">{!!$service->service_name!!}</a></td>
					<td>{!!number_format($service->service_price)!!}VND</td>
					<td>{!!$service->description!!}</td>
					<td><a href="{{url('admins/service/'.$service->id.'/edit')}}"><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/service/'.$service->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a></td>
				</tr>
				@endforeach			
              </table>
            </div>
    </div>        
@stop