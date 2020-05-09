@extends('layouts.master')
@section('content')
<form action="{{ route('confirmOrder') }}" method="POST">
  @csrf
  <div class="container">
    <div class="row">
      @if(auth()->check() && auth()->user()->address == null)
        <div class="col-6">
          @include('partials.order')
        </div>
        <div class="col-6">
          <div class="form-group"  style="margin-top:100px">
            <label for="">Adress</label>
            <textarea name="address" required class="form-control @error('address') is-invalid @enderror" name="" id="" cols="30" rows="10"></textarea>
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <button class="btnCategory">Confirm order</button>
          </div>
        </div>
      @elseif(auth()->check() && auth()->user()->address != null)
        <div class="col-6">
          @include('partials.order')
        </div>
        <div class="col-6">
          <div class="form-group"  style="margin-top:100px">
            <label for="">Adress</label>
            <textarea name="address" required class="form-control @error('address') is-invalid @enderror" name="" id="" cols="30" rows="10">{{ auth()->user()->address }}</textarea>
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <button class="btnCategory">Confirm order</button>
          </div>
        </div>
      @endif
    </div>
  </div>

</form>
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