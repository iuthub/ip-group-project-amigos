@extends('layouts.master')
@section('content')

  <div class="container mt-5" style="margin-bottom: 200px">
    @if(count($users) > 0)
    <h4 class="text-center mt-4">All users</h4>
    <ul class="list-group">
      @foreach($users as $user)
      <li class="list-group-item">
        Name:
          {{$user->name}}
        <span class="ml-4">Email: {{$user->email}}</span>
        <span class="ml-4">Number: +998{{$user->number}}</span>
          <a class="float-right" href="{{ route('userDelete', ['id' => $user->id]) }}">
            <i class="recived-trash-btn mt-1 far fa-lg fa-trash"></i>
          </a>
          <a class="float-right mr-4" href="{{ route('userAdmin', ['id' => $user->id]) }}">Make admin</a>
      </li>
      @endforeach
    </ul>
    @else
      <h4 class="text-center mt-4">You have no users</h4>
    @endif
    <div class="pagination-links">
      {{ $users->links() }}
  </div>
  </div>
@endsection