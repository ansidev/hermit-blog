@extends('layouts.item_master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1><a href="{{ route('items.index') }}" class="btn btn-success"><span class="glyphicon glyphicon-chevron-left"></span> Index</a> #{{ $item->id }} - {{ $item->name }}</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>#{{ $item->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $item->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $item->description }}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{ $item->quantity }}</td>
                        </tr>
                        <tr>
                            <th>Group</th>
                            <td>{{ $item->parent_name }}</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>{{ $item->location_name }}</td>
                        </tr>
                        <tr>
                            <th>Date Added</th>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Action</th>
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