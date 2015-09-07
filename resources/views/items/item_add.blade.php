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
            <form action="{{ route('items.store') }}" method="POST" role="form" id="add-item">
                <legend>Add New Item</legend>
				@include('items._form', [ 'button_name' => 'Add item' ])
            </form>
        </div>
    </div>
</div>
@stop
@include('items._script')