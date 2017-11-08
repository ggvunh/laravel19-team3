@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- <div class="panel-heading">
                Add a New Promotion <a href="{{ url('admins/promotions/index') }}" class="label label-primary pull-right">Back</a>
            </div> -->
            <div class="panel-body">
<<<<<<< HEAD
                <form action="{{ url('admins/promotions') }}" method="POST" class="form-horizontal" autocomplete="off">
                    @include('admins.form_promotions.layout')
=======
                <form action="{{ url('admins/promotions/') }}" method="POST" class="form-horizontal" autocomplete="off">
                    @include('layouts.promotion')
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
                </form>
            </div>
        </div>
    </div>
</div>
@stop
