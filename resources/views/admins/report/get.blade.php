@extends('layouts.master')
@section('content-index') 
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
	
				<h2 class="text-center">report booking</h2>
				<table border="1px" class="text-center table table-striped" style="font-size: 18px">
					<tr>
						<th  class="text-center">room name</th>
						<th  class="text-center">check in date</th>
						<th  class="text-center">check out date</th>
						<th  class="text-center">amount people</th>
					</tr>
					@foreach($book_room_service4  as $value )
					<tr>
						<td>{{ $value->room_name }}</td>
						<td>{{ $from }}</td>
						<td>{{ $to }}</td>
						<td>{{ $value->amount_people }}</td>
					</tr>
					@endforeach
					@foreach($book_room_service3 as $value )
					<tr>
						<td>{{ $value->room_name }}</td>
						<td>{{ $from }}</td>
						<td>{{ $value->check_out_date }}</td>
						<td>{{ $value->amount_people }}</td>
					</tr>
					@endforeach
					@foreach($book_room_service1 as $value )
					<tr>
						<td>{{ $value->room_name }}</td>
						<td>{{ $value->check_in_date }}</td>
						<td>{{ $value->check_out_date }}</td>
						<td>{{ $value->amount_people }}</td>
						</tr>
					@endforeach
				
					@foreach($book_room_service2 as $value )

					<tr>
						<td>{{ $value->room_name }}</td>
						<td>{{ $value->check_in_date }}</td>
						<td>{{ $to }}</td>
						<td>{{ $value->amount_people }}</td>
						</tr>
					@endforeach
				</table>
				<table border="1px" class="text-center table table-striped" style="font-size: 18px">
					<h2 class="text-center">
income statement</h2>
					<table border="1px" class="text-center table table-striped" style="font-size: 18px">
						<tr>
						<th  class="text-center">number of bookings</th>
						<th  class="text-center">service income</th>
						<th  class="text-center">room income</th>
						<th  class="text-center">total income</th>
						</tr>
					<tr>
						<td>{{ $count }}</td>
						<td>${{  $service_price }}</td>
						<td>${{ $room_price }}</td>
						<td>${{ $total }}</td>
					</tr>
				</table>
           </div>
        </div>
    </div>
</div>
<div class="availability text-center" style="">
	    <div class="row">
	        <div class="col-lg-12">
	            <form action="{{ route('report/get') }}" method="get">
	                <div class="availability-form">
	                    <input type="text" name="arrival" class="awe-calendar " placeholder="Arrival Date">
	                    <input type="text" name="departure" class="awe-calendar " placeholder="Departure Date">                                                     
	                    <div class="vailability-submit">
	                        <input type="submit" name="btnsearch" value="ok" class="awe-btn awe-btn-13">
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
@stop