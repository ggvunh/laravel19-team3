@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>page create user<h2>
            </div>
            <div class="panel-body">
                <form action="{{ url('admins/user_management/') }}" method="POST" class="form-horizontal" autocomplete="off">
                    @include('layouts.user_admin.admin')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
