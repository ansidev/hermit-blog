{!! Form::token() !!}
{{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, [ 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Item name', 'required' => 'true']) !!}
</div>
<div class="form-group">
    {!! Form::label('quantity') !!}
    {!! Form::input('number', 'quantity', null, [ 'id' => 'quantity', 'class' => 'form-control', 'placeholder' => 'Number of item', 'min' => '1', 'step' => '1']) !!}
</div>
<div class="checkbox">
    <label>
        {!! Form::checkbox('childable', null, null, [ 'id' => 'childable', 'placeholder' => 'Childable properties']) !!}Childable
    </label>
</div>
<div class="form-group">
    {!! Form::label('parent_id', 'Group') !!}
    {!! Form::hidden('parent_name', null, ['id' => 'parent_name', 'class' => 'form-control', 'placeholder' => 'Parent name']) !!}
    {!! Form::select('parent_id', $items, null, ['id' => 'parent_id', 'class' => 'form-control', 'data-bind' => 'parent_name']) !!}
{{--     <select name="parent_id" id="parent_id" class="form-control">
        <option value="0">None</option>
        @foreach ($items as $i)
        <option value="{{ $i->id }}">{{ $i->name }}</option>
        @endforeach
    </select>
 --}}</div>
<div class="form-group" id="location_input">
    <label for="location_name">Location</label>
    <input type="hidden" name="location_id" id="location_id" class="form-control" placeholder="Location name">
    <input type="text" name="location_name" id="location_name" class="form-control" placeholder="Location name">
</div>
<button type="submit" class="btn btn-primary">{{ $button_name }}</button>
<a href="{{ route('items.index') }}" class="btn btn-success">Cancel</a>