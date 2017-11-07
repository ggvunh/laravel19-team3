@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>user</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admins/user_management/create') }}">+</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="">user name</th>
                        <th width="">email</th>
                        <th width="">number phone</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                        <td>{{ $user->first_name}}{{  $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>
                            <a href="{{ route('admins/user_management/show', $user->id) }}" class="label btn-primary">view</a>
                            <a href="{{ route('admins/user_management/edit', $user->id) }}" class="label btn-primary">edit</a>
                            <a href="{{ route('admins/user_management/delete', $user->id) }}" class="label btn-primary" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                        <tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop