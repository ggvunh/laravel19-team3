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
                                    <th>Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                        @foreach($bookings as $bk)
                            <form method="get" action="{!!url('/review/cancel/'.$bk->id)!!}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">                     
                                    <tr>
                                        <td>1</td>
                                        <td>{!!$bk->check_in_date!!}</td>
                                        <td>{!!$bk->check_out_date!!}</td>
                                        <td>{!!(strtotime($bk->check_out_date)-strtotime($bk->check_in_date))/3600/24!!}</td>
                                        <td>{!!$bk->total!!} VND</td>
                                        <td>{!!$bk->booking_code!!}</td>
                                        <td>{!!$bk->status ? '<span class="btn btn-success disable">Booking</span>' : '<span class="btn btn-danger disable">Cancel</span>'!!}</td>
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
                                    When You cancel a booking the system will keep 20% booking value and return 80% to You.
                                </li>
                            </ul>
                    </div>
                    <!-- END / CONTENT -->
                </div>
            </div>
        </div>
    </section>
@stop