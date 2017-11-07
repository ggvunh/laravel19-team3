@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>page create Promotion<h2>
            </div>
            <div class="panel-body">
                <form action="{{ url('admins/promotions/') }}" method="POST" class="form-horizontal" autocomplete="off">
                    @include('layouts.promotion')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
