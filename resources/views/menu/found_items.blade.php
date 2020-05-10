
@extends('layouts.master')
@section('content')
<div class="container">
<div class="menues">
	@if(count($menus)>0)
	@foreach($menus as $menu)
	@include('partials.item')
	@endforeach
	@else
	<p class="error_msg" role="alert">No match found</p>

@endif
</div>
</div>

@endsection