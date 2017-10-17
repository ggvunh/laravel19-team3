@extends('layouts.master')
@section('content-index')
<!-- RESERVATION -->
<section class="section-reservation-page bg-white">
    <div class="container">
        <div class="reservation-page">                      
            <div class="row">
                <!-- SIDEBAR -->
                <div class="col-md-4 col-lg-3">                    
                    <div class="reservation-sidebar">
                    
                        <!-- SIDEBAR AVAILBBILITY -->
                        <div class="reservation-sidebar_availability bg-gray">

                            <!-- HEADING -->
                            <h2 class="reservation-heading">YOUR RESERVATION</h2>
                            <!-- END / HEADING -->

                            <h6 class="check_availability_title">your stay dates</h6>
                                
                            <div class="check_availability-field">
                                <label>Arrive</label>
                                <input type="text" class="awe-calendar awe-input" placeholder="Arrive">
                            </div>
                            
                            <div class="check_availability-field">
                                <label>Depature</label>
                                <input type="text" class="awe-calendar awe-input" placeholder="Depature">
                            </div>
                            
                            <h6 class="check_availability_title">ROOMS &amp; GUest</h6>
                            
                            <div class="check_availability-field">
                                <label>ROOMS</label>
                                <select class="awe-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                            
                            <div class="check_availability_group">
                            
                                <span class="label-group">ROOM 1</span>
                            
                                <div class="check_availability-field_group">
                            
                                    <div class="check_availability-field">
                                        <label>Adult</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                            
                                    <div class="check_availability-field">
                                        <label>Chirld</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                            
                                </div>
                            
                            </div>

                            <div class="check_availability_group">
                            
                                <span class="label-group">ROOM 2</span>
                            
                                <div class="check_availability-field_group">
                            
                                    <div class="check_availability-field">
                                        <label>Adult</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                            
                                    <div class="check_availability-field">
                                        <label>Chirld</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                            
                                </div>
                            
                            </div>

                            <button class="awe-btn awe-btn-13">CHECK AVAILABLE</button>

                        </div>
                        <!-- END / SIDEBAR AVAILBBILITY -->

                    </div>

                </div>
                <!-- END / SIDEBAR -->
                
                <!-- CONTENT -->
                <div class="col-md-8 col-lg-9">
                  
                    <div class="reservation_content">
                        
                        <!-- RESERVATION ROOM -->
                        <div class="reservation-room">
                          @foreach ($rooms as $rm)
                            <!-- ITEM -->
                            <div class="reservation-room_item">

                                <h2 class="reservation-room_name"><a href="#">{!!$rm->room_types->type_of_bed!!}</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="{!!url('/images/upload/rooms/'.$rm->images)!!}" alt=""></a>
                                </div>

                                <div class="reservation-room_text">

                                    <div class="reservation-room_desc">
                                        <p>{!!$rm->description!!}</p>
                                        <ul>
                                            <li>Person : {!!$rm->amount_people!!}</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>
                                             
                                        </ul>
                                    </div>
                                    <a href="#" class="reservation-room_view-more">View More Infomation</a>

                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout">{!! number_format($rm->room_price)!!}VND </span> / days
                                    </p>
                                    <a href="{!!url('/cart/'.$rm->id.'/add')!!}" class="awe-btn awe-btn-default">BOOK ROOM</a>
                               </div>

                            </div>
                            <!-- END / ITEM -->
                          @endforeach
                        </div>
                        <!-- END / RESERVATION ROOM -->

                    </div>

                </div>
                <!-- END / CONTENT -->               
            </div>
        </div>
    </div>
</section>
<!-- END / RESERVATION -->

@stop