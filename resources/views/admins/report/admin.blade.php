@extends('layouts.admin')
<head>
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/font-lotusicon.css')!!}">
    <!-- link rel="stylesheet" type="text/css" href="{!!asset('css/lib/bootstrap.min.css')!!}"> -->
  <!--   <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/owl.carousel.css')!!}"> -->
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/jquery-ui.min.css')!!}">
   <!--  <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/magnific-popup.css')!!}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/settings.css')!!}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/bootstrap-select.min.css')!!}"> -->

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{!!asset('css/style.css')!!}">
</head>
@section('content')
<div class="check-availability" style="padding-top: 200px">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admins/report/get') }}" method="get">
                    <div class="availability-form">
                        <input type="text" name="arrival" class="awe-calendar " placeholder="Arrival Date">
                        <input type="text" name="departure" class="awe-calendar " placeholder="Departure Date">                                                     
                        <div class="vailability-submit">
                            <input type="submit" name="btnsearch" value="check-availability" class="awe-btn awe-btn-13">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-ui.min.js') }}"></script>
    
   
    <!-- Custom jQuery -->
    <script type="text/javascript" src="{!!asset('js/scripts.js')!!}"></script> -->
@stop
