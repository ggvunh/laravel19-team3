@extends('layouts.admin')
@section('header')
	<h1>Room {!!$room->room_name!!}</h1>	
@stop
@section('content')
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title"><strong>Room Details</strong></h3>
		</div>	
		<div class="box-body">
			<div class="row">
				<div class="col-md-5">
					<img src="{!!url('/images/upload/rooms/'.$room->images)!!}" alt="" style='width: 550px; height: 300px; border:5px solid gray;''>
				</div>
				<div class="col-md-7">
					<ul style="padding-top: 15px;">
				<li>
					<strong>Room Type </strong>: {!!$room->room_types->type_of_bed!!}
				</li>
				<li style="list-style: none;">
					<a href="{{url('admins/'.$room->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admins/'.$room->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a>
				</li>
				<li>
					<strong>Price </strong> : {!!number_format($room->room_price)!!}đ
				</li>
				<li>
					<strong> Status </strong> : 				
					{!!$room->room_status ? '<span class="label label-success">Available</span>' : '<span class="label label-danger">Not Available</span>'!!}
				</li>
				<li>
					<strong>Amount Person </strong>: <span class="label label-warning">{!!$room->amount_people!!}</span></li>
				<li>
					<strong>Description </strong>:{!!$room->description!!}
				</li>
			</ul>
				</div>
			</div>
		</div>	
	</div>
	<div class="box box-default">
		<div class="box-header with-border">
		<h3 class="box-title"><strong>Booking Calendar</strong></h3>
	</div>
	<div class="col--12">
	<div class="box box-primary">		
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
		</div>	
		</div>
	</div>
@stop
@section('script')
          <script>
			    var date = new Date()
			    var d    = date.getDate(),
			        m    = date.getMonth(),
			        y    = date.getFullYear()
			    $('#calendar').fullCalendar({
			      header    : {
			        left  : 'prev,next',
			        center: 'title',
			        right : ''
			      },
		      
			      events    : [			        
			        @foreach($calendar as $cld)
			        {
			          title          : '{{$cld->booking->booking_code}}',
			          start          : '{{$cld->booking->check_in_date}}',
			          end            : "{{$cld->booking->check_out_date}}",
			          allDay         : true,
			          backgroundColor: '#3c8dbc',
			          borderColor    : '#f39c12',
			          url			 : "{{url('admins/bookings/'.$cld->booking_id)}}"
			        },
			        @endforeach
			      ]
			    })
			</script>

	
@stop