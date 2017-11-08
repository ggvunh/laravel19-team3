@extends('layouts.master')
@section('content-index')
<section class="section-404 bg-5">
    <div class="awe-overlay"></div>
    <div class="page-404 text-center">
        <a href=""><img src="images/logo-footer.png" alt=""></a>
        <h1>ROOM <span>404</span></h1> 
        <h6>Sorry, Room doesn't has. You can search room different. Thank You!</h6>
        <p>go back to <a href="{!!url('/')!!}">Home Page</a> </p>
    </div>

</section>
@stop
