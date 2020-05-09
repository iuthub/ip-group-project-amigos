@extends('layouts.master')
@section('content')
<div class="container">
<div class="menues">
	
@if(count($menu)>0 )
	@include('partials.item')
@else
<p class="error_msg" role="alert">No match found</p>

@endif
</div>
</div>

@endsection