@extends('layouts.master')
@section('content')
<div class="container">
    <div class="food" style="margin: 150px">
        <form action="{{ route('adminCreateLunch') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">New Menu</h3>
            <div class="form-group">
                <label for="">Category of the food</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input name="food_name" type="text" class="form-control @error('food_name') is-invalid @enderror">
                @error('food_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input name="food_description" type="text" class="form-control @error('food_description') is-invalid @enderror">
                @error('food_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input name="food_price" type="text" class="form-control @error('food_price') is-invalid @enderror">
                @error('food_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend @error('food_image') is-invalid @enderror">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input name="food_image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                </div>
                @error('food_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btnCategory">Create</button>
            </div>
        </form>
	</div>
</div>
@endsection