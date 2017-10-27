@extends('layouts.master')
@section('content-index')
    <!-- BLOG -->
    <section class="section-checkout">
        <div class="container">
            <div class="checkout ">
                <div class="row">
                     <div class="col-md-6">
                            <div class="checkout_head ">
                                <h3>1. Information Customer</h3>
                            </div>
                            <table style="width: 300px; margin: 10px 30px;">
                                <tr>
                                    <td><strong>Name</strong> : {!!Auth::user()->first_name !!} {!!Auth::user()->last_name!!} </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Address</strong> : {!!Auth::user()->address!!}, {!!Auth::user()->city!!} ,{!!Auth::user()->province!!}, {!!Auth::user()->country!!}</td>  
                                </tr>
                                <tr>
                                    <td><strong>Phone Number</strong> : 0{!!Auth::user()->phone_number!!}</td>         
                                </tr>
                                <tr>
                                     <td><strong>Email</strong> :{!!Auth::user()->email!!}</td>
                                </tr>                
                            </table>
                             <div class="checkout_head ">
                                <h3>2. BILLING INFORMATION</h3>

                            <table style="width: 300px; margin: 10px 30px;">
                                <tr>
                                    <td> <strong>Visa</strong> : XXXX-XXXX-XXXX-XXXX-070A <img src="{!!url('images/upload/rooms/visa_card.png')!!}" alt="" style="width: 30px; height: 25px;"></td>
                                </tr>                            
                                <tr>
                                    <td> <strong>Expires</strong> : 10/2020</td>
                                </tr>
                                <tr>
                                    <td><strong>Name</strong> : {!!Auth::user()->first_name !!} {!!Auth::user()->last_name!!} </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Address</strong> : {!!Auth::user()->address!!}, {!!Auth::user()->city!!} ,{!!Auth::user()->province!!}, {!!Auth::user()->country!!}</td>  
                                </tr>
                                <tr>
                                    <td><strong>Phone Number</strong> : 0{!!Auth::user()->phone_number!!}</td>         
                                </tr>
                                <tr>
                                     <td><strong>Email</strong> :{!!Auth::user()->email!!}</td>
                                </tr>           
                            </table>
                            </div>
                        </div> 
              
                    <div class="col-md-6">
                        <div class="checkout_head checkout_margin">
                            <h3>3. Your payment details</h3>
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
                                <p><span>Subtotal:</span> {!!(number_format(Cart::subtotal()))!!} VND</p>
                                <p><span>Order Total:</span> <span class="color-red">{!!(number_format(Cart::total()))!!} VND</span></p>
                            </div>                            
                             <div class="checkout_option bg-gray" style="padding: 10px;">
                                <h6><strong>PROMOTIONAL CODE</strong></h6>
                                <p>Press Promotional Your <input type="text" name="promotion_code" style="width: 100px; height: 30px;" placeholder="Code"> If You Have.</p>
                                <p style="font-size: 13px;">With Promotion Code, So You will discount 10%</p>
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