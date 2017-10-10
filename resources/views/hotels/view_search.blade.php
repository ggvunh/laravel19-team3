@extends('layouts.master')                    
@section('content-index')
	<div class="col-md-12">
		<div class="accomd-modations-header">
				
			 <h2 class="heading">ROOMS</h2>

			<img src="{!!asset('images/icon-accmod.png')!!}" alt="icon">
			<p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
		</div>
	</div>	
	<div class="col-md-12">
	    <div class="accomd-modations-content owl-single">                               
	        <div class="row">
	            <!-- ITEM -->
	            @foreach ($rooms as $rm)
		            <div class="col-xs-4">
		                <div class="accomd-modations-room">
		                    <div class="img">
		                        <a href="{!!url('/lotus/'.$rm->id)!!}"><img src="{!!url('/images/upload/rooms/'.$rm->images->url)!!}" alt="" style="width: 550px; height: 230px;"></a>
		                    </div>
		                    <div class="text">
		                        <h2><a href="{!!url('/lotus/'.$rm->id)!!}">{!!$rm->room_types->type_of_bed!!}</a></h2>
		                        <p class="price">
		                            <span class="amout">{!!$rm->room_price!!} Vnd</span>/days
		                        </p>
		                    </div>
		                </div>
		            </div>
	            @endforeach
	            <!-- END / ITEM -->
	        </div>
	    </div>
	</div>
@stop
