@extends('layouts.master')
@section('menu')
	@foreach ($roomType as $rt)
		<li><a href="{!!url('/type/'.$rt->type_of_bed)!!}" >{!!$rt->type_of_bed!!}</a></li>
	@endforeach
@stop
@section('content')
	<div class="container">
		<div class="accomd-modations bg-white">
			<div class="row">
				<div class="col-md-12">
					<div class="accomd-modations-header">
						<h2 class="heading">ROOMS </h2>
						<img src="images/icon-accmod.png" alt="icon">
						<p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="accomd-modations-content owl-single">                        
						<div class="row">
							@foreach ($rooms as $room)				
								<div class="col-xs-4">
									<div class="accomd-modations-room">
										<div class="img">
											<a href="{{asset('/hotels/'.$room->id)}}">
												<img src="images/upload/rooms/{!!$room->images->url!!}" style="width: 570px; height: 230px !important" alt="">
											</a>
										</div>
										<div class="text"">
											<h2><a href="{{asset('/hotels/'.$room->id)}}">{!!$room->room_types->type_of_bed!!}</a></h2>
											<p class="price">
											<span class="amout">{!!number_format($room->room_price)!!}VND</span>/days
											</p>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		{!!$rooms->links()!!}
	</div>	
@stop