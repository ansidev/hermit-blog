@extends('layouts.item_master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::model($item, [
                    'route' => [ 'items.update', $item->id ],
                    'method' => 'PUT',
                ])
            !!}

                @include('items._form', [ 'button_name' => 'Update' ])

            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
@include('items._script')