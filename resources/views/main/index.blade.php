@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="container-fluid">

	<div class="subtitle">
			<p>Distinct Latin Flavor<br>
			Authentic Charm</p>
	</div>
	<div class="d-flex flex-row justify-content-between">
		<div class="block"><img src="{{ asset('images/avocado.jpg') }}" alt=""></div>
		<div class="block">
			<div class="description">
				<p>We invite you and your family to take part in the Amigos’s</p>
				<p>experience: Savor time-honored recipes and discover</p>
				<p>mouthwatering Latin flavors in a casual-chic setting.</p>
			</div>
		</div>
		<div class="block"><img src="{{ asset('images/peppers.jpg') }}" alt=""></div>
	</div>
	<div class="card-group">
		<div class="card mb-3" style="max-width: 70%;">
			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="card-body">
						<div class="subtitle"><br><p>Our Food</p></div>
						<div class="description"><p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p></div>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>					
					</div>
				</div>
				<div class="col-md-6">
					<div class="mySlides">
						<img src="{{ asset('images/1.jpg') }}">
					</div>
					<div class="mySlides">
						<img src="{{ asset('images/2.jpg') }}">
					</div>
					<div class="mySlides">
						<img src="{{ asset('images/3.jpg') }}">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection