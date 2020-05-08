@extends('layouts.master')
@section('content')
<div class="container">
    @if(count($orders) < 1)
    <div class="orders" style="margin: 200px">
        <h3 class="text-center">
            You have no orders
        </h3>
    </div>
    @else
    <?php $overallPrice = 0 ?>
    <div class="orders" style="margin: 140px">
        <h3 style="color: #bb192e" class="text-center mb-5">Your orders</h3>
        <div class="list-group">
            <ul class="list-group ">
                @foreach ($orders as $order)
                    @if(!$order->recived)
                    <?php $overallPrice += $order->food_price ?>
                        <li style="font-weight: bold;
    font-family: "Lucida Console", Courier, monospace;" class="list-group-item">
                            Food name:
                            <a href="/menu" style="color:  #bb192e " class="mr-2">
                                {{ $order->food_type }}
                            </a>
                            <br>
                            Quantity: {{$order->food_number}}
                            <br>
                            Price: {{$order->food_price}}$
                            <a href="{{ route('cancelOrder', ['id' => $order->id]) }}" style="color:red" class="float-right">
                                cancel
                            </a>
                        </li>
                    @else
                    <li style="color: black" class="list-group-item recived">
                        Food:
                        <span style="color: #bb192e" class="ml-2 mr-2">
                            {{ $order->food_type }}
                        </span>
                            |
                        <span class="ml-2 recived-span">Recieved</span>
                        <i class=" far fa-check-circle"></i>
                        <a href="{{ route('cancelOrder', ['id' => $order->id]) }}" class="float-right">
                            <i class="recived-trash-btn mt-1 far fa-lg fa-trash"></i>
                        </a>
                    </li>
                    @endif
                @endforeach
                <span style="color: black" class="mt-3">Overall Price: <strong>{{ $overallPrice }}</strong> $</span>
            </ul>
        </div>
    </div>
    @endif
</div>
@endsection