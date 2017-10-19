@extends('layouts.master')
@section('content-index')
<!-- RESERVATION -->
    <section class="section-reservation-page bg-white">

        <div class="container">
            <div class="reservation-page">
                
                <div class="row">

                    <!-- SIDEBAR -->
                    <div class="col-md-5 col-lg-4">

                        <div class="reservation-sidebar">
                            
                            <!-- ROOM SELECT -->
                            <div class="reservation-room-selected bg-gray">

                                <!-- HEADING -->
                                <h2 class="reservation-heading">Select Rooms</h2>
                                <!-- END / HEADING -->

                                <!-- ITEM -->
                                <div class="reservation-room-seleted_item">
                                     @foreach(Cart::content() as $row)
                                    <h6>ROOM {!!$row->options->room_name!!}</h6>

                                    <div class="reservation-room-seleted_name has-package">
                                        <h2><a href="#">{!!$row->name!!}</a></h2>
                                    </div>

                                    <div class="reservation-room-seleted_package">
                                        <h6>Space Price</h6>
                                        <ul>
                                            <li>
                                                <span>Check-In</span>
                                                <span>{!!session()->get('arrival')!!}</span>
                                            </li>
                                            <li>
                                                <span>Check-Out</span>
                                                <span>{!!session()->get('departure')!!}</span>
                                            </li>
                                            <li>
                                                <span>Total Nights</span>
                                                <span>                                       
                                                    {!!
                                                        (strtotime(session()->get('departure')) - strtotime(session()->get('arrival')))/3600/24
                                                    !!}
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    Price
                                                </span>
                                                <span>
                                                   <span class="reservation-amout">{!! number_format($row->price) !!}VND</span>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="reservation-room-seleted_total-room">
                                        TOTAL Room {!!$row->options->room_name!!}
                                        <span class="reservation-amout">{!! (number_format($row->total))!!}</span>
                                    </div>

                                    </div>
                                     @endforeach
                                    
                                </div>
                                <!-- END / ITEM -->
                                
                                <!-- TOTAL -->
                                <div class="reservation-room-seleted_total bg-blue">
                                    <label>TOTAL</label>
                                    <span class="reservation-total">
                                        {!!(Cart::total())!!} VND
                                    </span>
                                </div>
                                <!-- END / TOTAL -->

                            </div>
                            <!-- END / ROOM SELECT -->
                            
                        </div>

                    </div>
                    <!-- END / SIDEBAR -->
                    
                    <!-- CONTENT -->
                    <div class="col-md-7 col-lg-8">

                        <div class="reservation_content">
                            
                            <div class="reservation-billing-detail">

                                <p class="reservation-login">Returning customer? <a href="{!!url('/login')!!}">Click here to login</a></p>

                                <h4>BILLING DETAILS</h4>
                                <form method="post" action="{!!url('/checkout')!!}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name<sup>*</sup></label>
                                            <input type="text" class="input-text" name="txtfirst_name" value="{!!Auth::user()->first_name!!}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name<sup>*</sup></label>
                                            <input type="text" class="input-text" value="{!!Auth::user()->last_name!!}" name="txtlast_name">
                                        </div>
                                    </div>
                                    <label>Address<sup>*</sup></label>
                                    <input type="text" class="input-text" value="{!!Auth::user()->address!!}" name="txtaddress">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Town / City<sup>*</sup></label>
                                            <input type="text" class="input-text" name="txtcity" value="{!!Auth::user()->city!!}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Province<sup>*</sup></label>
                                            <input type="text" class="input-text" name="txtprovince" value="{!!Auth::user()->province!!}">
                                        </div>
                                    </div>
                                    <label>Country<sup>*</sup></label>
                                    <input type="text" class="input-text" placeholder="Street Address" name="txtcountry" value="{!!Auth::user()->country!!}">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email Address<sup>*</sup></label>
                                            <input type="email" class="input-text" name="txtemail" value="{!!Auth::user()->email!!}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone<sup>*</sup></label>
                                            <input type="tel" class="input-text" name="txtphone" value="{!!Auth::user()->phone_number!!}">
                                        </div>
                                    </div>

                                    <label class="label-radio">
                                        <input type="radio" class="input-radio">
                                        Create an account?
                                    </label>

                                    <p class="reservation-code">
                                        You have a coupon? <a href="#">Click here to enter your code</a>
                                    </p>

                                    <ul class="option-bank">
                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Direct Bank Transfer
                                            </label>
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </li>

                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Cheque Payment
                                            </label>
                                        </li>

                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Credit Card
                                            </label>

                                            <img src="images/icon-card.jpg" alt="">
                                        </li>

                                    </ul>
                                    <button type="submit" class="awe-btn awe-btn-13">PLACE ORDER</button>
                                </form>
                            </div>

                        </div>

                    </div>
                    <!-- END / CONTENT -->
                    
                </div>
            </div>
        </div>
    </section>
<!-- END / RESERVATION -->
@stop