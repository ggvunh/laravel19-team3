@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    <h2>user Edit <h2>
</div>
  {!! Form::model($user, ['url' => 'user_management/' . $user->id, 'method' => 'put']) !!}
    @include('layouts.user_admin.user')
  {!! Form::close() !!}
@stop