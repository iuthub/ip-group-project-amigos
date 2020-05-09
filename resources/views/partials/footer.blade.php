<hr>
<div class="subtitle">
  <p class="restourant_name"><img class="logo_footer" src="{{ asset('logo/logo_footer.png') }}"></p>
</div>
<div>
	<nav class="nav justify-content-center">
		<a class="nav-link" href="https://www.instagram.com/"><li class="icon-car"><img src="{{asset('images/icons/instagram.svg')}}"></li></a>
		<a class="nav-link" href="https://www.twitter.com/"><li class="icon-car"><img src="{{asset('images/icons/twitter.svg')}}"></li></a>
		<a class="nav-link" href="https://www.facebook.com/"><li class="icon-car"><img src="{{asset('images/icons/facebook.svg')}}"></li></a>
	</nav>
</div>
<nav class="nav justify-content-center">
	<a class="nav-link" href="{{ route('adminGetMenu') }}"><p class="black_text">FOOD & DRINK</p></a>
	<a class="nav-link" href="{{ route('myOrders') }}"><p class="black_text">MAKE ORDER</p></a>
	<a class="nav-link" href="/contact"><p class="black_text">CONTACT US</p></a>
	@guest
		<a class="nav-link" href="/login"><p class="black_text">SIGN IN</p></a>
		<a class="nav-link" href="/register"><p class="black_text">REGISTER</p></a>
	@endguest
</nav>