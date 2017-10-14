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

                            <!-- ROOM SELECT -->
                            <div class="reservation-room-selected bg-gray">

                                <!-- HEADING -->
                                <h2 class="reservation-heading">Select Rooms</h2>
                                <!-- END / HEADING -->

                                <!-- ITEM -->
                                <div class="reservation-room-seleted_item">
                                    <h6>ROOM 1</h6> <span class="apb-option">2 Adult, 1 Child</span>
                                    <div class="reservation-room-seleted_name">
                                        <h2><a href="#">LUXURY ROOM</a></h2>
                                        <span class="reservation-amout">$470.00</span>
                                    </div>
                                    <a href="#" class="reservation-room-seleted_change">Change Room</a>
                                </div>
                                <!-- END / ITEM -->

                                <!-- CURRENT -->
                                <div class="reservation-room-seleted_current bg-blue">
                                    <h6>YOU ARE BOOKING ROOM 2</h6>  
                                    <span>2 Adult, 1 Chirld</span>   
                                </div>
                                <!-- CURRENT -->
                                
                                <!-- TOTAL -->
                                <div class="reservation-room-seleted_total">
                                    <label>TOTAL</label>
                                    <span class="reservation-total">$470.00</span>
                                </div>
                                <!-- END / TOTAL -->

                            </div>

                            <!-- END / ROOM SELECT -->

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
                        <table class="table" style="margin-top: 50px;">
                            <thead>
                                <tr class="blue-grey lighten-4">
                                    <th>#</th>
                                    <th>Room</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                    <th>Price</th>
                                    <th>SuToal</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach(Cart::content() as $row)
                                @if(!isset($row->id))
                                    @break
                                @else
                                    <tr>
                                        <td>1</td>
                                        <td>
                                        <p><strong>{!!$row->name!!}</strong></p>

                                        </td>
                                        <td><input type="text" value="{!!$row->qty = 1!!}" style="width: 30px;"></td>
                                        <td><a href="{!!url('/cart/'.$row->rowId.'/delete')!!}" class="btn btn-danger">Delete</a></td>
                                        <td>{!!number_format($row->price)!!}</td>
                                        <td>{!!number_format($row->total)!!} VND</td>
                                    </tr>
                                @endif
                        @endforeach
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                    <td><span class="btn btn-warning disabled">Total</span> </td>
                                    <td><span class="btn btn-default disabled"> {!! Cart::total()!!}VND</span></td>
                                </tr>
                            </tfoot>
                        </table>
                         <a href="{!!url('/cart/destroy')!!}" class="awe-btn awe-btn-6">Delete All Order</a>
                        <a href="" class="awe-btn awe-btn-6">GO NEXT STEP</a>
                    </div>
                    <!-- END / CONTENT -->
                    
                </div>
            </div>
        </div>
    </section>
<!-- END / RESERVATION -->
@stop