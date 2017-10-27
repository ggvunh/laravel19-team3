@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    Edit <a href="{{ route('admins/promotions/index') }}" class="label label-primary pull-right">come Back</a>
</div>
  {!! Form::model($promotion, ['url' => 'admins/promotions/' . $promotion->id, 'method' => 'put']) !!}
    @include('layouts.promotion')
  {!! Form::close() !!}
@stop