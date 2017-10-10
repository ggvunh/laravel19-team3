@extends('layouts.admin')
@section('header')
	<h1>All Services</h1>
	<a href="{{ url('admins/service/create') }}" class="btn btn-primary">Create Service</a>
@stop
@section('content')
	<div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tr>
				<th>#</th>
				<th>Service Name</th>
				<th>Service Price</th>
				<th>Description</th>
				<th>Edit</th>			
				<th>Delete</th>			
			</tr>
                @foreach ($services as $service)
                <tr>
					<th scope="row">{!!$service->id!!}</th>
					<td><a href="{{url('admins/service/'.$service->id)}}">{!!$service->service_name!!}</a></td>
					<td>{!!number_format($service->service_price)!!}VND</td>
					<td>{!!$service->description!!}</td>
					<td><a href="{{url('admins/service/'.$service->id.'/edit')}}">Edit</a></td>
					<td><a href="{{url('admins/service/'.$service->id.'/delete')}}">Delete</a></td>
				</tr>
				@endforeach			
              </table>
            </div>
@stop