@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    <h2>user Edit page<h2>
</div>
  {!! Form::model($user, ['url' => 'admins/user_management/' . $user->id, 'method' => 'put']) !!}
    @include('layouts.user_admin.admin')
  {!! Form::close() !!}
@stop