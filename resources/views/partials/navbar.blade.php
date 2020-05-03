<nav class="navbar navbar-dark bg-dark">
	<div class="container">
		<a class="nav-link" href="/">
			<p class="restourant_name">AMIGOS</p>
		</a>

		@if(auth()->check() && auth()->user()->isAdmin())
			<a class="nav-link"
				href="{{ route('adminGetMenu') }}">
				<p>CREATE MENU</p>
			</a>
			<a class="nav-link" href="#">
				<p>ORDERS</p>
			</a>
			<a class="nav-link" href="{{ route('allCategories') }}">
				<p>CATEGORIES</p>
			</a>
		@else
			<a class="nav-link"
				href="{{(!auth()->check() || !auth()->user()->isAdmin()) ?  route('getMenu') : route('adminGetMenu')}}">
				<p>FOOD & DRINK</p>
			</a>

			<a class="nav-link" href="#">
				<p>MAKE ORDER</p>
			</a>

			<a class="nav-link" href="/contact">
				<p>CONTACT US</p>
			</a>
		@endif

		@guest
			<a class="nav-link" href="/login">
				<p>SIGN IN</p>
			</a>

			<a class="nav-link" href="/register">
				<p>REGISTER</p>
			</a>
		@else
			<a class="nav-link" href="{{ route('logout') }}"
				onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
				<p>LOGOUT</p>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
		@endguest
	</div>	
</nav>