@extends('layouts.item_master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{ route('items.store') }}" method="POST" role="form" id="add-item">
                <legend>Add New Item</legend>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Item name">
                </div>
                <div class="checkbox">
                    <label>
                    	<input type="checkbox" name="childable" id="childable" placeholder="Childable properties">Childable
                    </label>
                </div>
                <div class="form-group">
                    <label for="name">Group</label>
					<input type="hidden" name="parent_name" id="parent_name" class="form-control" placeholder="Parent name" value="">
                    <select name="parent_id" id="parent_id" class="form-control">
                    	<option value="0">None</option>
                    	@foreach ($items as $i)
                    	<option value="{{ $i->id }}">{{ $i->name }}</option>
                    	@endforeach
                    </select>
                </div>
                <div class="form-group" id="location_input">
                    <label for="name">Location</label>
                    <input type="hidden" name="location_id" id="location_id" class="form-control" placeholder="Location name">
                    <input type="text" name="location_name" id="location_name" class="form-control" placeholder="Location name">
{{--
                    <select name="location_id" id="location_id" class="form-control" placeholder="Location name" style="display:none">
                    	<option value=""></option>
                    </select>
 --}}
                </div>
                <button type="submit" class="btn btn-primary">Add item</button>
                <a href="{{ route('items.index') }}" class="btn btn-success">Cancel</a>
            </form>
        </div>
    </div>
</div>
@stop
@section('script')
<script type="text/javascript">
	$('#parent_id').change(function(event) {
		$val = $(this).val();
		$name = $(this).find(":selected").text();

		$('#parent_name').val($name);
		$('#location_id').val($val);
		$('#location_name').val($name);

		if ($val === "0") {
			// $('#location_name').removeAttr('disabled');
			$('#location_name').show();
			$('#location_name').val('');
		}
		if ($val !== "0") {
			// $('#location_name').attr('disabled','disabled');
			// $('select#location_id').show();
		}
	});
	// $('#add-item').submit(function(event) {
	// 	event.preventDefault();
	// });
</script>
@stop