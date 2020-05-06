@extends('layouts.master')
@section('content')
<div class="container">
  <form style="margin: 100px" method="POST" action="{{route('updateCategory', ['id'=> $category->id]) }}">
    @csrf
    <h3 class="text-center mb-5" style="color: #bb192e;">Edit Category</h3>
    <div class="from-group">
      <input style="color: black;" value="{{ $category->categoryName }}" type="text" placeholder="Category name" name="categoryName" class="form-control">
    </div>
    <div class="from-group mt-2">
      <button class="btnCategory" type="submit">Update</button>
    </div>
  </form>
</div>
@endsection