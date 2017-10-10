@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              <form class="box-tools" action="admins/search" method="get">
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
          					<th>In Date</th>
          					<th>Out Date</th>
          					<th>Status</th>
          					<th>User</th>
          					<th>Room</th>
          					<th>Edit</th>
          					<th>Delete</th>
			         	</tr>
                @foreach ($bookings as $bk)
                 <tr>
          					<th scope="row">{!!$dem++!!}</th>
          					<td>{!!$bk->check_in_date!!}</td>
          					<td>{!!$bk->check_out_date!!}</td>
          					<td>{!!$bk->status ? 'Booking' : 'Cancel'!!}</td>
          					<td>{!!$bk->user->username!!}</td>
          					<td>
                        @foreach ($bk->room as $rm)
                          {!!$rm->room_name!!}
                        @endforeach
                    </td>
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