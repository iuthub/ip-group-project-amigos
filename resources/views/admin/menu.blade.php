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
				<th colspan="2">LUNCH</th>
				@foreach($lunches as $lunch)
				<tr>
					<td class="left_col">
						{{$lunch ->lunch_name}}
					</td>
					<td class="right_col">
						$ {{$lunch ->lunch_price}}
					</td>
				</tr>
				<tr>
					<td class="descr" colspan="2">
						{{$lunch ->lunch_description}}
					</td>
				</tr>
				@endforeach
				
			</table>
			@include('admin.edit_menu')
		</div>
		<div class="lunch-image">
			<img src="images/menu/plantains.jpg" alt="">
		</div>
		
	</div>
</div>

@endsection