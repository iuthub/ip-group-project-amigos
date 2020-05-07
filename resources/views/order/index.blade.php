@extends('layouts.master')
@section('content')
<div class="menues" style="margin-top:100px">
    <div class="card" style="width: 20rem; height: 31rem;">
        <img class="card-img-top" src="{{ $menu->food_image ? asset('food_image/' .$menu->food_image) : 
        asset('img/pic1.jpg')
        }}" alt="Menu image">
        <div class="card-body">
        <h5 class="card-title">{{ $menu->food_name }}</h5>
        <p class="card-text">{{ $menu->food_description }}.</p>
        <p class="card-text">Price: <span id="val">{{ $menu->food_price }}</span>$</p>
        @if(auth()->check() && auth()->user()->isAdmin())
            <a class="deleteBtn mr-4" href="{{ route('deleteMenu', ['id' => $menu->id]) }}">
            <i class="far fa-lg fa-trash"></i>
            </a>
            <a class="editBtn" href="{{ route('editMenu', ['id' => $menu->id]) }}">
            <i class="fas fa-lg fa-edit"></i>
            </a>
        @else
            <span class="totalPrice mr-3"></span>
            <input id="inputNumber" max="100" value="1" class="inputNumber" min="1" type="number">
            <a class="mt-2 btn btn-primary" href="">Confirm Order{{--<i class="fas fa-lg fa-cart-plus"></i>--}}</a>
        @endif
        </div>
    </div>
</div>
<script>
  //Selecting from html
  let inputNumber = document.querySelector('#inputNumber');
  var inputValue = inputNumber.value;
  let value = document.querySelector('#val').innerHTML;
  let putValue = document.querySelector('.totalPrice');

  //Adding event listeners
  inputNumber.addEventListener('keyup', maxAndMin);
  inputNumber.addEventListener('click', maxAndMin);
  inputNumber.addEventListener('keyup', cal);
  inputNumber.addEventListener('click', cal);


  //Functions
  function cal(){
    inputValue = inputNumber.value;
    putValue.innerHTML ='Total price: ' + inputValue * value + '$';
  }
  cal()

  function maxAndMin() {
    inputNumber.value;
    if(inputNumber.value < 0 || inputNumber.value > 100){
      inputNumber.value = "";
    }
  }
</script>
@endsection