@extends('layouts.master')
@section('menu')
	@foreach ($roomType as $rt)
		<li><a href="#">{!!$rt->type_of_bed!!}</a></li>
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
							@foreach ($room as $rm)				
								<div class="col-xs-4">
									<div class="accomd-modations-room">
										<div class="img">
											<a href="#"><img src="images/upload/rooms/{!!$rm->images->url!!}" style="width: 570px; height: 230px !important" alt=""></a>
										</div>
										<div class="text"">
											<h2><a href="#">{!!$rm->room_types->type_of_bed!!}</a></h2>
											<p class="price">
											<span class="amout">{!!number_format($rm->room_price)!!}VND</span>/days
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
		{!!$rm->links()!!}
	</div>	
@stop