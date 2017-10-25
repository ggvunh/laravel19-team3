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
                                @foreach(Cart::content() as $row)
                                
                                    <div class="reservation-room-seleted_item">
                                        <h6>{!!$row->options->room_name!!}</h6> <span class="apb-option">{!!$row->options->person!!} person</span>

                                        <div class="reservation-room-seleted_name">
                                            <h2><a href="#">{!!$row->name!!}</a></h2>
                                            <span class="reservation-amout">{!! number_format($row->price) !!}VND</span>
                                        </div>
                                    </div>

                                @endforeach
                                <!-- END / ITEM -->

                                <!-- CURRENT -->
                                <div class="reservation-room-seleted_current bg-blue">
                                    <h6>YOU HAVE BOOKED {!!Count(Cart::content())!!} RoomS</h6>  
                                </div>
                                <!-- CURRENT -->
                                
                                <!-- TOTAL -->
                                <div class="reservation-room-seleted_total">
                                    <label>TOTAL</label>
                                    <span class="reservation-total">{!! (number_format(Cart::total()))!!}VND</span>
                                </div>
                                <!-- END / TOTAL -->

                            </div>

                            <!-- END / ROOM SELECT -->
                             <!-- RESERVATION DATE -->
                            <div class="reservation-date bg-gray">

                                <!-- HEADING -->
                                <h2 class="reservation-heading">Dates</h2>
                                <!-- END / HEADING -->
                                
                                <ul>
                                    <li>
                                        <span>Check-In</span>
                                        <span>{!!$arrival!!}</span>
                                    </li>

                                    <li>
                                        <span>Check-Out</span>
                                        <span>{!!$departure!!}</span>
                                    </li>
                                    <li>
                                        <span>Total Nights</span>
                                        <span>                                       
                                            {!!(strtotime($departure) - strtotime($arrival))/3600/24!!}
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>Total Rooms</span>
                                        <span>{!!count(Cart::content())!!}</span>
                                    </li>
                                    <li>
                                        <span>Total Guests</span>
                                        <span>{!!$person!!}</span>
                                    </li>
                                </ul>
   
                            </div>
                            <!-- END / RESERVATION DATE -->

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
                                    <th>Day</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                    <th>SuToal</th>
                                </tr>
                            </thead>
                        <tbody>

                            @foreach(Cart::content() as $row)
                                           
                                    <tr>
                                        <td>{!!++$dem!!}</td>
                                        <td>
                                        <p><strong><a href="{!!url('/cart/'.$row->id)!!}">{!!$row->name!!}</a></strong></p>
                                        </td>
                                           @if($row->id !== $row->options->id)  
                                                <td><input type="text" value="{!! $row->qty!!}" style="width: 40px;" disabled></td>
                                                <td>{!!number_format($row->price)!!}</td>
                                            @else
                                                <td><input type="text" value="{!! $row->options->qty !!}" style="width: 40px;" disabled></td>
                                              
                                        @endif  
                                        <td>{!!number_format($row->price)!!}</td>
                                                 <td><a href="{!!url('/cart/'.$row->rowId.'/delete')!!}" class="btn btn-danger">Delete</a></td>
                                        <td>{!!number_format($row->total)!!} VND</td>
                                                                                                                                 
                                    </tr>
                                
                            @endforeach
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                    <td><span class="btn btn-warning disabled">Total</span> </td>
                                    <td><span class="btn btn-default disabled"> {!!  (number_format(Cart::total())) !!}</span> VND</td>

                                </tr>
                            </tfoot>
                        </table>
                         <a href="{!!url('/cart/destroy')!!}" class="btn btn-danger">Delete All Order</a>
                        <a href="{!!url('lotus/bookings/search?arrival='.$arrival.'&departure='.$departure.'&person='.$person)!!}" class="btn btn-success">Continue Order</a>
                        <a href="{!!url('/checkout')!!}" class="btn btn-success">CheckOut</a>
                    </div>
                    <!-- END / CONTENT -->
                    
                </div>
            </div>
        </div>
    </section>
<!-- END / RESERVATION -->
@stop