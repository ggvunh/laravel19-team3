@extends('layouts.admin')
@section('header')
  <h1>All Bookings List</h1>
@stop
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bookings Table</h3>
              <form class="box-tools" action="{!!url('admins/bookings/search')!!}" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="key_search" class="form-control pull-right" placeholder="Search">
                  
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
          					<th>Booking Code</th>
          					<th>In Date</th>
          					<th>Out Date</th>
          					<th>Status</th>
                    <th>First Name</th>
          					<th>Last Name</th>
			         	</tr>
                @foreach ($bookings as $index => $bk)
                 <tr>
          					<th scope="row">{!!++$index!!}</th>
                    <td><a href="{{ url('admins/bookings/'.$bk->id) }}">{!! $bk->booking_code !!}</a></td>
          					<td>{!!$bk->check_in_date!!}</td>
          					<td>{!!$bk->check_out_date!!}</td>
          					<td>{!!$bk->status ? '<span class="label label-success"> Booking' : '<span class="label label-danger"> Cancel'!!}</td>
                    <td>{!!$bk->user->first_name!!}</td>
          					<td>{!!$bk->user->last_name!!}</td>
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