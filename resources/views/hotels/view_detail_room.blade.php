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
								<span class="price">Starting <span class="amout">{!! $room->room_price !!} Vnd</span> /days</span>
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
				                <span class="amout">$260</span>  /days
				            </p>
				        </div>
				        
				        <div class="room-detail_form">
				            <label>Arrive</label>
				            <input type="text" class="awe-calendar" placeholder="Arrive Date">
				            <label>Depature</label>
				            <input type="text" class="awe-calendar" placeholder="Departure Date">
				            <label>Adult</label>
				            <select class="awe-select">
				                <option>1</option>
				                <option>2</option>
				                <option selected>3</option>
				                <option>4</option>
				            </select>
				            <label>Chirld</label>
				            <select class="awe-select">
				                <option>1</option>
				                <option>2</option>
				                <option selected>3</option>
				                <option>4</option>
				            </select>
				            <button class="awe-btn awe-btn-13">Book Now</button>
				        </div>

				    </div>
				    <!-- END / FORM BOOK -->
				</div>
			</div>
		</div>
	</div>
@stop