<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial scale=1.0">
		<title>Contact Amigos</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
	</head>
	<body>
		<h1>CONTACT AMIGOS </h1>

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
    <textarea id="subject" name="feedback" placeholder="I am writing about" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


	</body>
</html>