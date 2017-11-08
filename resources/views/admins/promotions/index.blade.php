@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                    <h2>PAGE DISCOUNT(%)</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('admins/promotions/create') }}">+</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="20">Code</th>
                        <th width="20">discount</th>
                        <th width="30">event</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($promotions as $promotion)
                        <tr>
                            <td class="table-text">
                                <div>{{$promotion->code}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$promotion->discount}}</div>
                            </td>
                            <td>

                                <a href="{{ route('admins.promotions.show', $promotion->id) }}" class="label label-success">show</a>
                                <a href="{{ route('admins/promotions/edit', $promotion->id) }}" class="label label-success">edit</a>
                                <a href="{{ route('admins/promotions/delete', $promotion->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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