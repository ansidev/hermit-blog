@extends('layouts.item_master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1><a href="{{ route('items.index') }}" class="btn btn-success"><span class="glyphicon glyphicon-chevron-left"></span> Go to index</a> {{ $item->name }}</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Group</th>
                            <th>Location</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->parent_name }}</td>
                            <td>{{ $item->location_name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('items.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop