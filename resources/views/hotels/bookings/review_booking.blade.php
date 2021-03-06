@extends('layouts.master')                    
@section('content-index')
    <section class="section-reservation-page bg-white">
        <div class="container">
            <div class="reservation-page">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-md-12 col-lg-12">
                        <table class="table" style="margin-top: 50px;">
                            <thead>
                                <tr class="blue-grey lighten-4">
                                    <th>#</th>
                                    <th>Check In Day</th>
                                    <th>Check Out Day</th>
                                    <th>Days</th>
                                    <th>Total</th>
                                    <th>Code Booking</th>
                                    <th>Code Discount</th>
                                    <th>Status</th>
                                    <th>Do You Want Cancel?</th>
                                </tr>
                            </thead>
                        <tbody>
                        @foreach($bookings as $key => $bk)
                            <form method="get" action="{!!url('/review/cancel/'.$bk->id)!!}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">                
                                    <tr>
                                        <td>{!!++$key!!}</td>
                                        <td>{!!$bk->check_in_date!!}</td>
                                        <td>{!!$bk->check_out_date!!}</td>
                                        <td>{!!(strtotime($bk->check_out_date)-strtotime($bk->check_in_date))/3600/24!!}</td>
                                        <td>{!! number_format($bk->total)!!} VND</td>
                                        <td>{!!$bk->booking_code!!}</td>

                                        <td>{!!(Session::get('promotion_code'))? $bk->promotion->code : 0!!}</td>
                                        <td>{!!$bk->status ? '<span class="label label-success disable">Booking</span>' : '<span class="label label-danger disable">Cancel</span>'!!}</td>
                                        <td> <button type="submit" class="btn btn-danger">Cancel  </button></td>
                                    </tr>
                            </form>         
                        @endforeach
                        <tr>
                            <td colspan="6">&nbsp;</td>
                            <td>                               
                            </td> 
                        </tr>
                        </table>
                            <ul>
                                <li>
                                    When You cancel a booking the system will keep 20% booking value and return 80% to You. <strong><a href="{!!url('/')!!}" class="label label-info">Come Back Home</a></strong>
                                </li>
                            </ul>
                    </div>
                    <!-- END / CONTENT -->
                </div>
            </div>
        </div>
    </section>
@stop