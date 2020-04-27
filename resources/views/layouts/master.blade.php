<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-reboot.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/mystyles.css') }}">
	<script src="{{ URL::to('js/slideshow.js') }}" defer></script>
	<title>Amigos</title>
</head>
<body>
	<div class="container-fluid">
		
		@include('partials.navbar')
		@yield('content')
		@include('partials.footer')
	</div>
</body>
</html>