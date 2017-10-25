@extends('layouts.master')
@section('content-index')
    <!-- BLOG -->
    <section class="section-checkout">
        <div class="container">
            <div class="checkout">
                <div class="row">
                    <div class="col-md-6">

                        <div class="checkout_head checkout_margin">
                            <h3>Your payment details</h3>
                        </div>

                        <div class="checkout_form checkout_margin">
                          <form method="post" action="{!!url('/checkout')!!}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                                <p><span>Cart Subtotal:</span> {!!(number_format(Cart::subtotal()))!!} VND</p>

                                <p><span>Promotion Code: </span><input type="text" name="promotion_code"></p>
                                <p><span>Order Total:</span> <span class="color-red">{!!(number_format(Cart::total()))!!} VND</span></p>
                            </div> 
                            
                            <div class="checkout_option">
                                <ul>
                                    <li>
                                       
                                        <h6>You will discount 10% if you have <span class="label label-warning">code promotion</span></h6>
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