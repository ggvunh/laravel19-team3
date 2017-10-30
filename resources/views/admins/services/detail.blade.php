@extends('layouts.admin')
@section('header')
@stop
@section('content')
  <div class="box box-primary">
    <div class="box-header">  <h2 class="box-title">{{$service->service_name}}</h2> 
      <a href="{{ url('admins/service') }}" class="btn btn-primary pull-right">Back to Service Page</a>
    </div>
    <div class="box-body">
      <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:25%">Service Price:</th>
                <td>{{$service->service_price}}đ</td>
              </tr>
              <tr>
                <th>Service Description:</th>
                <td>{{$service->description}}</td>
              </tr>
            </table>
      </div>
    </div>           
  </div>  
@stop