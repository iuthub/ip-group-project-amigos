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
        <h3 class="text-center mb-5">Your orders</h3>
        <div class="list-group">
            <ul class="list-group ">
                @foreach ($orders as $order)
                    @if(!$order->recived)
                    <?php $overallPrice += $order->food_price ?>
                        <li class="list-group-item">
                            Food name:
                            <a href="/menu" class="mr-2">
                                {{ $order->food_type }}
                            </a>
                            |
                            Quantity: {{$order->food_number}}
                            |
                            Price: {{$order->food_price}}$
                            <a href="{{ route('cancelOrder', ['id' => $order->id]) }}" class="float-right">
                                cancel
                            </a>
                        </li>
                    @else
                    <li class="list-group-item recived">
                        Food:
                        <span class="ml-2 mr-2">
                            {{ $order->food_type }}
                        </span>
                            |
                        <span class="ml-2 recived-span">Recived</span>
                        <i class=" far fa-check-circle"></i>
                        <a href="{{ route('cancelOrder', ['id' => $order->id]) }}" class="float-right">
                            <i class="recived-trash-btn mt-1 far fa-lg fa-trash"></i>
                        </a>
                    </li>
                    @endif
                @endforeach
                <span class="mt-3">Overall Price: {{ $overallPrice }} $</span>
            </ul>
        </div>
    </div>
    @endif
</div>
@endsection