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
			$('#parent_name').val("");
			$('#location_name').show();
			$('#location_name').val("");
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