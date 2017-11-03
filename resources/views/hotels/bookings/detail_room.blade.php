@extends('layouts.master')
@section('content-index')
		<div class="container" style="padding-top: 70px;">
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

			</div>
		</div>
	</div>
@stop