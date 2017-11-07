@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    <h2>promotion Edit page<h2>
</div>
  {!! Form::model($promotion, ['url' => 'admins/promotions/' . $promotion->id, 'method' => 'put']) !!}
    @include('layouts.promotion')
  {!! Form::close() !!}
@stop