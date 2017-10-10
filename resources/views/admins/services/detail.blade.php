@extends('layouts.admin')
@section('header')
	<a href="{{ url('admins/service') }}" class="btn btn-primary pull-right">Back to Service Page</a>
	<h1>{{$service->service_name}}</h1>	
@stop
@section('content')
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:25%">Service Price:</th>
                <td>{{$service->service_price}}</td>
              </tr>
              <tr>
                <th>Service Description:</th>
                <td>{{$service->description}}</td>
              </tr>
            </table>
@stop