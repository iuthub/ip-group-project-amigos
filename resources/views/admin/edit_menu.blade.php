<div class="add_menu">
	<div class="left_col-edit">
		<input  type="text" name="lunch_name" form="postForm" placeholder="lunch name">
	</div>
	<div class="right_col-edit">
		<input class="rigth_col-edit" type="text" name="lunch_price" form="postForm" placeholder="price">
	</div>
</div>
<div class="add_menu">
	<div class="ingridients">
		<input type="text" name="lunch_description" form="postForm" placeholder="ingridients">
	</div>
	<div >
		<form id="postForm" action="{{ route('adminCreateLunch') }}" method="post">
			@csrf
			<input class="addbtn" type="submit" value="Add">
		</form>
	</div>
</div>