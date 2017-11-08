@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Promotion</h2>
        </div>
        <div class="pull-right">
<<<<<<< HEAD
            <a href="{{ url('admins/promotions/index') }}" class="label label-primary pull-right"> Back</a>
=======
            <a href="{{ url('admins/promotions/index') }}" class="label label-primary pull-right">come back</a>
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Code :</strong>
<<<<<<< HEAD
            {{ $promotion->code_name }}
=======
            {{ $promotion->code }}
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>discount:</strong>
<<<<<<< HEAD
            {{ $promotion->promotion }}<strong>%</strong>
=======
            {{ $promotion->discount }}<strong>%</strong>
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
        </div>
    </div>
</div>
@stop
