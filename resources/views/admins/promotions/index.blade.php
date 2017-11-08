@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
<<<<<<< HEAD
                    <h2>page discount</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ url('admins/promotions/create') }}">New</a>
=======
                    <h2>PAGE DISCOUNT(%)</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('admins/promotions/create') }}">+</a>
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
<<<<<<< HEAD
                        <th width="40">Code</th>
                        <th width="30">discount</th>
=======
                        <th width="20">Code</th>
                        <th width="20">discount</th>
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
                        <th width="30">event</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($promotions as $promotion)
                        <tr>
                            <td class="table-text">
<<<<<<< HEAD
                                <div>{{$promotion->code_name}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$promotion->promotion}}</div>
                            </td>
                            <td>
                                <a href="{{ route('admin.promotion.show', $promotion->id) }}" class="label label-success">show</a>
                                <a href="{{ route('admin.promotion.edit', $promotion->id) }}" class="label label-success">edit</a>
                                <a href="{{ route('admin.promotion.delete', $promotion->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
=======
                                <div>{{$promotion->code}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$promotion->discount}}</div>
                            </td>
                            <td>
                                <a href="{{ route('admins.promotions.show', $promotion->id) }}" class="label label-success">show</a>
                                <a href="{{ route('admins/promotions/edit', $promotion->id) }}" class="label label-success">edit</a>
                                <a href="{{ route('admins/promotions/delete', $promotion->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
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