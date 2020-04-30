<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial scale=1.0">
		<title>Contact Amigos</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="js/contactUs.js">
		<link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-reboot.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/mystyles.css') }}">
	<script src="{{ URL::to('js/slideshow.js') }}" defer></script>
	<style>
		.inavalid-feedback
		{
			display: block;
		}
	</style>
	</head>
	<body>
		@include('partials.navbar')
		<h1><b>CONTACT AMIGOS</b> </h1>

<div class="container">
	@if(Session::has('flash_message'))
	<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
	@endif
  <form method="post" name="ContactForm" action="{{route('contact.store')}}">
  	@csrf
    <label for="firstName">First Name</label>
    <input type="text" pattern="^[a-z]{2,20}" title="Name.." name="firstname" placeholder="John">
    @if ($errors->has('firstname'))
    <small class="form-text invalid-feedback">{{ $errors->first('firstname') }}</small>
    @endif
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lastname" placeholder="Lewis">
    @if ($errors->has('lastname'))
    <small class="form-text invalid-feedback">Please,write the lastname</small>
    @endif
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="amigos@gmail.com">
    @if ($errors->has('email'))
    <small class="form-text invalid-feedback">wriet email </small>
    @endif

    <label for="feedback">Leave your comment</label>
    <textarea id="subject" name="feedback" placeholder="I am writing about..." style="height:200px"></textarea>
    @if ($errors->has('feedback'))
    <small class="form-text invalid-feedback">{{ $errors->first('feedback') }}</small>
    @endif

    <input type="submit" value="Submit">
    
  </form>
</div>
@include('partials.footer')

	</body>
</html>