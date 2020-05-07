@extends('layouts.master')
@section('content')
<div class="container">
<div class="menues">
	@foreach($menus as $menu)
	@include('partials.item')
	@endforeach
</div>
</div>

@endsection