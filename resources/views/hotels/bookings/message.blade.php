@extends('layouts.master')
@section('content-index')
<section class="section-404 bg-5">
    <div class="awe-overlay"></div>
    <div class="page-404 text-center">
        <a href=""><img src="images/logo-footer.png" alt=""></a>
        <h1>ROOM <span>404</span></h1> 
        <h6>Look like it's empty here!</h6>
        <p>There are so many other interesting rooms that are much easier to be accessed, I bet. Enjoy them in <a href="#">the box below.</a></p>
        
        <div class="search-404">
            <input type="text" class="filed-text" placeholder="Search page">  
            <button class="awe-btn awe-btn-12">SEARCH</button>  
        </div>
        
        <p>or go back to <a href="index.html">Home Page</a> </p>
    </div>

</section>
@stop
