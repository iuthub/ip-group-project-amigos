@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="form-group mt-5">
			<a href="{{ route('createMenu') }}" class="btn btn-primary">Add Menu</a>
		</div>
	    <hr>
		<div class="menues">
			@foreach ($menues as $menu)
				@include('partials.item')
			@endforeach
		</div>
        <div class="pagination-links">
            {{ $menues->links() }}
        </div>
    </div>
@endsection