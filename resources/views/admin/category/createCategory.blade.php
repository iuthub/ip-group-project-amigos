@extends('layouts.master')
@section('content')
<div class="container">
	<form style="margin:100px;" method="POST" action="{{route('storeCategory') }}">
		@csrf
		<h3 class="text-center mb-5" style="color: #bb192e;">Create Category</h3>
		<div class="form-group">
			<input type="text" placeholder="Category name" name="categoryName" class="form-control">
		</div>
		<div class="form-group">
			<button class="btnCategory" type="submit">Create</button>
		</div>
	</form>
</div>
@endsection 