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
	<div class="lunch">
		<div class="lunch-box">
			<table>
				<tr>
					<td>
						<input type="text" name="lunch_name" form="postForm" placeholder=" lunch name">
					</td>
					<td>
						<input type="text" name="lunch_price" form="postForm" placeholder="price">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="text" name="lunch_description" form="postForm" placeholder="description">
					</td>
				</tr>
			</table>
		</div>
		<div class="lunch-image">
			<img src="images/menu/plantains.jpg" alt="">
		</div>
		
	</div>
</div>

@endsection