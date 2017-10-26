@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- <div class="panel-heading">
                Add a New Promotion <a href="{{ url('admins/promotions/index') }}" class="label label-primary pull-right">Back</a>
            </div> -->
            <div class="panel-body">
                <form action="{{ url('admins/promotions/') }}" method="POST" class="form-horizontal" autocomplete="off">
                    @include('layouts.promotion')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
