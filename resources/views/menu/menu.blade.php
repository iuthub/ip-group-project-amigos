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
	<div class="row">
		<div class="col-8">

		</div>
		<div class="col-4">

			<form action="{{route('userSearchMenu')}}" method="get">
				<div class="search">
					{{ csrf_field() }}
					
					<input class="form-control" type="text" name="search_item" placeholder="Search...">
					<button class="btn btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>
	<hr>
	<div class="menues">
		@foreach ($menues as $menu)
		@include('partials.item')
		@endforeach
	</div>
	<div class="pagination-links">
		{{ $menues->links() }}
	</div>
</div>

@endsection