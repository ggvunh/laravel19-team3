@extends('layouts.master')
@section('banner')
	<h1 class="element-invisible">Slider</h1>
	<div id="slider-revolution">
	    <ul>
	        <li data-transition="fade">
	            <img src="{!!asset('images/slider/img-1.jpg')!!}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
	            
	            <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
	             <img src="{!!asset('images/slider/hom1-slide1.png')!!}" alt="icons">
	            </div>

	            <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
	             WELCOME TO
	            </div>

	            <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE LOTUS HOTEL</div>
	            
	            <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
	        </li> 

	        <li data-transition="fade">
	            <img src="{!!asset('images/slider/img-4.jpg')!!}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
	            
	            <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
	             <img src="{!!asset('images/slider/hom1-slide1.png')!!}" alt="icons">
	            </div>

	            <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
	             WELCOME TO
	            </div>

	            <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE LOTUS HOTEL</div>
	            
	            <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
	            
	        </li> 

	    </ul>
	</div>
@stop
@section('search_date')
	<div class="check-availability">
	    <div class="row">
	        <div class="col-lg-12">
	            <form action="{!!url('/lotus/bookings/search')!!}" method="get">
	                <div class="availability-form">
	                    <input type="text" name="arrival" class="awe-calendar from" placeholder="Arrival Date">
	                    <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date"> 
						<select class="awe-select" name="person">
						    <option>Person</option>
						    <option>1</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						    <option>5</option>
						</select>                                                     
	                    <div class="vailability-submit">
	                        <input type="submit" name="btnsearch" value="check-availability" class="awe-btn awe-btn-13">
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
@stop                    
@section('content-index')	

 <form class="box-tools" action="{{url('/lotus/search')}}" method="get" style="float: right; padding-right: 15px;">
				<div class="input-group input-group-sm" style="width: 350px;">
					  <input type="text" name="key_search" class="form-control pull-right" placeholder="Search">

					  <div class="input-group-btn">
					    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					  </div>
				</div>
			</form>

	<div class="col-md-12">
		<div class="accomd-modations-header">			
			 <h2 class="heading">ROOMS</h2>
			@if(Session('cancel'))
				<div class="alert alert-danger">
					{!!Session('cancel')!!}
				</div>
			@endif
			<img src="{!!asset('images/icon-accmod.png')!!}" alt="icon">
			<p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
		</div>
	</div>

	<div class="col-md-12">
		 {{$rooms->links()}}
	    <div class="accomd-modations-content owl-single">                             
	        <div class="row">
	            <!-- ITEM -->
	            @foreach ($rooms as $rm)
		            <div class="col-xs-4">
		                <div class="accomd-modations-room">
		                    <div class="img">
		                        <a href="{!!url('/lotus/'.$rm->id)!!}"><img src="{!!url('/images/upload/rooms/'.$rm->images)!!}" alt="" style="width: 550px; height: 230px;"></a>
		                    </div>
		                    <div class="text">
		                        <h2><a href="{!!url('/lotus/'.$rm->id)!!}">{!!$rm->room_types->type_of_bed!!}</a></h2>
		                        <p class="price">
		                            <span class="amout">{!!number_format($rm->room_price) !!} Vnd</span>/days
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
                        <a href="{!!asset('/about')!!}"><img src="{!!asset('images/home/about/img-1.jpg')!!}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <h2 class="heading">ABOUT US</h2>
                        <span class="box-border"></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                        <a href="{!!asset('/about')!!}" class="awe-btn awe-btn-default">READ MORE</a>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
	</section>
@stop
@section('outbest')
    <div class="our-best">
        <div class="row">

            <div class="col-md-6 col-md-push-6">
                <div class="img">
                    <img src="{!!asset('images/slider/img-4.jpg')!!}" style="height: 350px;" alt="">
                </div>
            </div>

            <div class="col-md-6 col-md-pull-6 ">
                <div class="text">
                    <h2 class="heading">Our Best</h2>
                    <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                    <ul>
                        <li><img src="images/home/ourbest/icon-3.png" alt="icon">250 Best Rooms  5 Star</li>
                        <li><img src="images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator</li>
                        <li><img src="images/home/ourbest/icon-4.png" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                        <li><img src="images/home/ourbest/icon-5.png" alt="icon">Luxurious High Thread Count </li>
                        <li><img src="images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                        <li><img src="images/home/ourbest/icon-6.png" alt="icon">Ocean Views to lotus Hotel</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@stop
