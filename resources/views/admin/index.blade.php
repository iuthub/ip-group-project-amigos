@extends('layouts.master')
@section('content')
<<<<<<< HEAD

<div class="adminPanel">
  <img src="images/admin.png"  class="image" style="width:100%">
  <div class="middle">
    <div class="text"><h5><strong>Role:</strong>admin</h5></div>
  </div>
</div>
     
     <div class="container">
      
     </div>
=======
  <div class="container mt-5" style="margin-bottom: 200px">
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
  </div>
>>>>>>> f6773ea327a89080dc3c01f34e60332c34d72aa3
@endsection