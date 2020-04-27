<nav class="navbar navbar-dark bg-dark">
	<div class="container">
		<a class="nav-link" href="/">
			<p class="restourant_name">AMIGOS</p></a>
		<a class="nav-link" href="#"><p>FOOD & DRINK</p></a>
		<a class="nav-link" href="#"><p>MAKE ORDER</p></a>
		<a class="nav-link" href="#"><p>CONTACT US</p></a>
		@guest
		<a class="nav-link" href="/login"><p>SIGN IN</p></a>
		<a class="nav-link" href="/register"><p>REGISTER</p></a>
		@else
					<a class="nav-link" href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
		@endguest
	</div>	
</nav>