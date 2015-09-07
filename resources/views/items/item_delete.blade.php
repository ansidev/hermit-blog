@extends('layouts.item_master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            Are you sure want to delete <strong>{{ $item->name }}</strong>?
        </div>
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open([
                    'route' => [ 'items.destroy', $item->id ],
                    'method' => 'DELETE',
                    'style' => 'display: inline'
                ])
            !!}
                <button class="btn btn-danger">Delete</button>
                <a href="{{ route('items.index') }}" class="btn btn-success">Cancel</a>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop