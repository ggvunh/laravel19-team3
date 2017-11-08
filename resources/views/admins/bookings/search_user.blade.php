@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">About {!!count($bookings)!!} results</h3>
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
          					<td>{!!$bk->status ? 'Booking' : 'Cancel'!!}</td>
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