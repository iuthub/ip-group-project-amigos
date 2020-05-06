@if ($message = Session::get('msg'))
<div class="alert alert-info alert-block">
	{{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
	<strong>{{ $message }}</strong>
</div>
@endif