@extends('layouts.master')
@section('search_date')
	<div class="check-availability" style="padding-top: 300px">
	    <div class="row">
	        <div class="col-lg-12">
	            <form action="{{ route('report/get') }}" method="get">
	                <div class="availability-form">
	                    <input type="text" name="arrival" class="awe-calendar " placeholder="Arrival Date">
	                    <input type="text" name="departure" class="awe-calendar " placeholder="Departure Date">                                                     
	                    <div class="vailability-submit">
	                        <input type="submit" name="btnsearch" value="ok" class="awe-btn awe-btn-13">
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
@stop 