@extends('layouts.master')
@section('content')
<div class="container">
  <form style="margin: 100px" method="POST" action="{{route('updateCategory', ['id'=> $category->id]) }}">
    @csrf
    <h3 class="text-center mb-5">Edit Category</h3>
    <div class="from-group">
      <input value="{{ $category->categoryName }}" type="text" placeholder="Category name" name="categoryName" class="from-control">
    </div>
    <div class="from-group">
      <button class="btn btn-primary" type="submit">Update</button>
    </div>
  </form>
</div>
@endsection