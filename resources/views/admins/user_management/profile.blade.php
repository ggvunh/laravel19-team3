@extends('layouts.master')
@section('banner')
<div class="container" style="margin-top: 150px">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> user</h2>   
        </div>
        <div class="pull-right">
            <a href="{{ url('index') }}" class="label label-primary pull-right">come back</a>
            @if(isset($user))
            <a href="{{ route('user_management/editprofile', $user->id) }}" class="label label-primary pull-right">edit</a>
            @elseif(isset($id))
            <a href="{{ route('user_management/editprofile', $id) }}" class="label label-primary pull-right">edit</a>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>first name :</strong>
            @if(isset($user))
            {{ $user->first_name }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->first_name }}
        
            @endforeach

            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>last name:</strong>
            @if(isset($user))
            {{ $user->last_name }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->last_name }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>phone:</strong>
            @if(isset($user))
            {{ $user->phone_number }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->phone }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            @if(isset($user))
            {{ $user->email }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->email }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>    address:</strong>
            @if(isset($user))
            {{ $user->address }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->address }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>country:</strong>
            @if(isset($user))
            {{ $user->country }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->country }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>province:</strong>
            @if(isset($user))
            {{ $user->province }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->province }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>city:</strong>
            @if(isset($user))
            {{ $user->city }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->city }}
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>deposit:</strong>
            @if(isset($user))
            {{ $user->deposit }}
            @elseif(isset($userupdate))
            @foreach($userupdate as $value)
                {{ $value->deposit }}
            @endforeach
            @endif
        </div>
    </div>
</div>
</div>
@stop