@extends('layouts.item_master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>All Items <a href="{{ route('items.add') }}" class="btn btn-success">Add new</a></h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Location</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->parent_name }}</td>
                        <td>{{ $item->location_name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop