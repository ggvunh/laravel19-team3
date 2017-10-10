@extends('layouts.master')
                     
@section('content-index')	
	<div class="col-md-12">
		<div class="accomd-modations-header">
			<form class="box-tools" action="{{url('/lotus/search')}}" method="get">
				<div class="input-group input-group-sm" style="width: 150px;">
					  <input type="text" name="key_search" class="form-control pull-right" placeholder="Search">

					  <div class="input-group-btn">
					    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					  </div>
				</div>
			</form>
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
	    {{$rooms->links()}}
	</div>
@stop
@section('about')
	<section class="section-home-about bg-white">
    <div class="container">
        <div class="home-about">
            <div class="row">
                <div class="col-md-6">
                    <div class="img">
                        <a href="#"><img src="{!!asset('images/home/about/img-1.jpg')!!}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <h2 class="heading">ABOUT US</h2>
                        <span class="box-border"></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                        <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
	</section>
@stop