@extends('layouts.item_master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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