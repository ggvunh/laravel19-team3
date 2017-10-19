@extends('layouts.master')
@section('content-index')
    <!-- BLOG -->
    <section class="section-checkout">
        <div class="container">
            <div class="checkout">
                <div class="row">

                    <div class="col-md-6">
                        <div class="checkout_head">
                            <h3>BILLING DETAILS</h3>
                        </div>

                        <div class="checkout_form">
                            <form method="post" action="{!!url('/checkout')!!}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <label>First Name*</label>
                                        <input type="text" class="field-text" name="txtFirst_name" placeholder="Frist Name">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Last Name*</label>
                                        <input type="text" class="field-text" name="txtLast_name" placeholder="Last Name">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Address*</label>
                                        <input type="text" class="field-text" placeholder="Street Address" name="txtAddress">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Town / City*</label>
                                        <input type="text" class="field-text" name="txtCity" placeholder="Town / City">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Province*</label>
                                        <input type="text" class="field-text" name="txtProvince" placeholder="Province">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Country*</label>
                                        <input type="text" class="field-text" placeholder="Country" name="txtCountry">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Email Address*</label>
                                        <input type="email" class="field-text" name="txtEmail" placeholder="Email Address">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Phone*</label>
                                        <input type="text" class="field-text" name="txtPhone" placeholder="Phone Number">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>
                                            <input type="radio" class="field-radio"> Create an account?
                                        </label>

                                        <p class="checkout_text">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Account Password*</label>
                                        <input type="password" class="field-text" name="txtPassword" placeholder="Please Press Password">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>&nbsp;</label>
                                        <p class="code-enter">
                                            You have a coupon? <a href="#">Click here to enter your code</a>
                                        </p>
                                    </div>

                                </div>
                         

                        </div>
                    </div> 

                    <div class="col-md-6">

                        <div class="checkout_head checkout_margin">
                            <h3>Your payment details</h3>
                        </div>

                        <div class="checkout_form checkout_margin">
                        
                            <div class="checkout_cart">

                                <!-- ITEM -->
                                @foreach(Cart::content() as $row)
                                <div class="cart-item">
                                
                                    <div class="img">
                                        <a href="{!!url('/cart/'.$row->id)!!}"><img src="{!!url('images/upload/rooms/'.$row->options->images)!!}" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <a href="{!!url('/cart/'.$row->id)!!}"><b>{!!$row->name!!}</b></a>
                                        <p>
                                            <span>{!!(strtotime(session()->get('departure')) - strtotime(session()->get('arrival')))/3600/24!!} days - ROOM  {!!$row->options->room_name!!} </span> <b>{!! number_format($row->total) !!}VND</b>
                                        </p>
                                    </div>
                                    <a href="#" class="remove"><i class="fa fa-close"></i></a>
                               
                                </div>
                                 @endforeach
                                <!-- END / ITEM -->

                            </div>

                            <div class="checkout_cartinfo">
                                <p><span>Cart Subtotal:</span> {!!Cart::subtotal()!!} VND</p>
                                <p><span>Shipping:</span> Free Shipping</p>
                                <p><span>Order Total:</span> <span class="color-red">{!!Cart::total()!!} VND</span></p>
                            </div> 
                            
                            <div class="checkout_option">
                                <ul>
                                    <li>
                                        <input type="radio" class="radio payment-methor" name="payment">
                                        <h6>Direct Bank Transfer</h6>
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio payment-methor" name="payment"> 
                                        <h6>Cheque Payment</h6>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio payment-methor" name="payment"> 
                                        <h6>Credit Card</h6>
                                        <img src="images/icon-card.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="checkout_btn">
                                <button type="submit" class="awe-btn awe-btn-13 btn-order">PLACE ORDER</button>
                            </div>
                        </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END / BLOG -->
@stop