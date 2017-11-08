@extends('layouts.admin')
@section('content')
<div class="panel-heading">
<<<<<<< HEAD
    Edit A Promotion <a href="{{ url('admins.promotions.index') }}" class="label label-primary pull-right">Back</a>
</div>
  {!! Form::model($promotion, ['url' => 'admin/promotion/' . $promotion->id, 'method' => 'put']) !!}
    @include('admin.forms.promotion')
=======
    Edit <a href="{{ route('admins/promotions/index') }}" class="label label-primary pull-right">come Back</a>
</div>
  {!! Form::model($promotion, ['url' => 'admins/promotions/' . $promotion->id, 'method' => 'put']) !!}
    @include('layouts.promotion')
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
  {!! Form::close() !!}
@stop