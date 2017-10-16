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
              <form class="box-tools" action="{!!asset('admins/bookings/search')!!}" method="get">
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
                    <th>Room Name</th>
          					<th>In Date</th>
          					<th>Out Date</th>
          					<th>Status</th>
          					<th>User</th>
			         	</tr>
                @foreach ($bookings as $bk)
                 <tr>
          					<th scope="row">{!!$dem++!!}</th>
                    <td><a href="#">{!! $bk->booking_code !!}</a></td>
                    <td>{!! $bk->room->room_name !!}</td>
          					<td>{!!$bk->booking->check_in_date!!}</td>
          					<td>{!!$bk->booking->check_out_date!!}</td>
          					<td>{!!$bk->booking->status ? 'Booking' : 'Cancel'!!}</td>
          					<td>{!!$bk->booking->user->username!!}</td>
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