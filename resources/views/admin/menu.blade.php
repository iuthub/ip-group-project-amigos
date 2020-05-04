@extends('layouts.master')
@section('content')
<div class="menu-land">
	<br><br><br><br><br><br><br><br><br><br>
	<p class="menu-name">MENU</p>
	<br><br><br><br><br><br><br><br><br><br>
</div>
<br><br><br>
<div class="container">
	<div class="title">
		<p class="restourant_name">Food&Drinks</p>
	</div>
	<div class="block">
		<div class="description">
			<p>We invite you and your family to take part in the Amigos’s</p>
			<p>experience: Savor time-honored recipes and discover</p>
			<p>mouthwatering Latin flavors in a casual-chic setting.</p>
		</div>
	</div>

		<div class="form-group">
			<a href="{{ route('createMenu') }}" class="btn btn-primary">Add Menu</a>
		</div>
	<hr>
	<div class="row">
		@foreach ($menues as $menu)
		<div class="col-md-3 col-xl-3 mr-2">
			@include('partials.item')
		</div>
		@endforeach
	</div>
	
	
</div>

@endsection