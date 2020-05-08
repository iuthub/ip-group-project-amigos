@extends('layouts.master')
@section('content')
<div class="container">
  <div class="form-group mt-4">
    <a class="btnCategory" href="{{ route('createCategory') }}">Create category</a>
  </div>
  <hr>
  <ul class="list-group">
  @foreach($categories as $category)
  <a  class="categoryNameStyle" href="{{ route('categoryMenu', ['id' => $category->id]) }}">
    <li class="list-group-item list-group-item-action">{{ $category->categoryName }}
      <a class="float-right deleteBtn ml-4" href="{{ route('deleteCategory', ['id' => $category->id]) }}">
        <i class="far fa-trash"></i>
      </a>
      <a class="float-right editBtn" href="{{ route('editCategory', ['id' => $category->id]) }}">
        <i class="fas fa-edit"></i>
      </a>
    </li>
  </a>
  @endforeach
  <div class="pagination-links">
    {{ $categories->links() }}
  </div>
@endsection