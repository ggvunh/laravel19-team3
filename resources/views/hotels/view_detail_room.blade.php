@extends('layouts.master')
@section('content-index')
		<div class="container">
			<div class="room-wrap-1">
				<div class="row">
				<!-- ITEM -->
					<div class="col-md-7">
						<div class="room_item-1">
							<h2><a href="#">{!! $room->room_types->type_of_bed !!}</a></h2>

							<div class="img">
								<a href="#"><img src="{!! url('images/upload/rooms/'.$room->images) !!}" alt=""></a>
							</div>

							<div class="desc">
								<p>{!! $room->description !!}</p>
								<ul>
									<li>Amount: {!! $room->amount_people !!} Person(s)</li>
									<li>Size: 35 m2 / 376 ft2</li>
									<li>View: Ocen</li>
									<li>Bed: King-size or twin beds</li>
								</ul>
							</div>

							<div class="bot">
								<span class="price">Starting <span class="amout">{!! number_format($room->room_price) !!}Vnd</span> /days</span>
								<a href="#" class="awe-btn awe-btn-13">{!! $room->amount_people ? 'Availabel' : 'Not Availabel' !!}</a>
							</div>
					</div>
				</div>
				<!-- END / ITEM -->
				<div class="col-md-5">
				<!-- FORM BOOK -->
				    <div class="room-detail_book">

				        <div class="room-detail_total">
				            <img src="images/icon-logo.png" alt="" class="icon-logo">
				            
				            <h6>STARTING ROOM FROM</h6>
				            
				            <p class="price">
				                <span class="amout">{!! number_format($room->room_price) !!}</span>  /days
				            </p>
				        </div>
				        <form action="{!!url('/lotus/bookings/search')!!}" method="get">
					        <div class="room-detail_form">
					            <label>Arrive</label>
					            <input type="text" name="arrival" class="awe-calendar" placeholder="Arrive Date">
					            <label>Depature</label>
					            <input type="text" name="departure" class="awe-calendar" placeholder="Departure Date">
					            <label>Person</label>
					             <input type="text" name="person" class="awe-select" placeholder="Persons"">    
					            <button type="submit" name="btnsearch" class="awe-btn awe-btn-13">Book Now</button>
					        </div>
				    	</form>
				    </div>
				    <!-- END / FORM BOOK -->
				</div>
			</div>
		</div>
	</div>
@stop