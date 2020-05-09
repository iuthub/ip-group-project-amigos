@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" type="text/css" href="js/contactUs.js">
<div class="container">
	@if(Session::has('flash_message'))
	<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
	@endif
  <form method="post" name="ContactForm" action="{{route('contact.store')}}">
	  @csrf
	<h4 class="text-center mt-4">Contact Us</h4>
	<label pattern="^[a-z]{2,20}" for="firstName">First Name</label>
    <input type="text"  title="Name.." name="firstname" placeholder="John">
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
    	<small class="form-text invalid-feedback">write email </small>
    @endif

    <label for="feedback">Leave your comment</label>
    <textarea id="feedback" name="feedback" placeholder="I am writing about..." style="height:200px"></textarea>
    @if ($errors->has('feedback'))
    	<small class="form-text invalid-feedback">{{ $errors->first('feedback') }}</small>
    @endif

    <input type="submit" value="Submit">
    
  </form>
</div>
@endsection