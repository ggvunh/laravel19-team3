@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>page discount</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ url('admins/promotions/create') }}">New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="40">Code</th>
                        <th width="30">discount</th>
                        <th width="30">event</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($promotions as $promotion)
                        <tr>
                            <td class="table-text">
                                <div>{{$promotion->code_name}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$promotion->promotion}}</div>
                            </td>
                            <td>
                                <a href="{{ route('admin.promotion.show', $promotion->id) }}" class="label label-success">show</a>
                                <a href="{{ route('admin.promotion.edit', $promotion->id) }}" class="label label-success">edit</a>
                                <a href="{{ route('admin.promotion.delete', $promotion->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop