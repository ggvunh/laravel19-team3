@extends('layouts.master')
@section('content-index')
<section class="section-404 bg-5">
    <div class="awe-overlay"></div>
    <div class="page-404 text-center">
        <a href=""><img src="images/logo-footer.png" alt=""></a>
        <h1><span>Error</span></h1> 
        <h6>Sorry, Card of you not full money. Please, Check again Your Card</h6>
        <p>go back to <a href="{!!url('/')!!}">Home Page</a> </p>
    </div>

</section>
@stop
