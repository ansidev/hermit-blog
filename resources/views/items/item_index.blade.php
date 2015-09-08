@extends('layouts.item_master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>All Items <a href="{{ route('items.add') }}" class="btn btn-success">Add new</a></h1>
            <div class="table-responsive">
                <table class="table table-hover" id="items-index">
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
                        @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route('items.show', $item->id) }}" class="btn btn-default">#<?php printf('%03d', $item->id); ?></a></td>
                            <td title="{{ $item->name }}">{{ str_limit($item->name, $limit = 40, $end = '...') }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->parent_name }}</td>
                            <td>{{ $item->location_name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('items.delete', $item->id) }}" class="btn btn-danger">Delete</a>
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
@section('script')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#items-index').DataTable();
    } );
</script>
@stop