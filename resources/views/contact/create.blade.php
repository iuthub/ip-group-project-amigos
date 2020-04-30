<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial scale=1.0">
		<title>Contact Amigos</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-reboot.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/mystyles.css') }}">
	<script src="{{ URL::to('js/slideshow.js') }}" defer></script>
	</head>
	<body>
		@include('partials.navbar')
		<h1><b>CONTACT AMIGOS</b> </h1>

<div class="container">
  <form method="post" action="{{route('contact.store')}}">
  	@csrf
    <label for="firstName">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="John">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Lewis">
    <label for="email">E-mail</label>
    <input type="email" id="e-mail" name="email" placeholder="amigos@gmail.com">

    <label for="feedback">Leave your comment</label>
    <textarea id="subject" name="feedback" placeholder="I am writing about..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
@include('partials.footer')

	</body>
</html>