@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    Edit A Promotion <a href="{{ url('admins.promotions.index') }}" class="label label-primary pull-right">Back</a>
</div>
  {!! Form::model($promotion, ['url' => 'admin/promotion/' . $promotion->id, 'method' => 'put']) !!}
    @include('admin.forms.promotion')
  {!! Form::close() !!}
@stop