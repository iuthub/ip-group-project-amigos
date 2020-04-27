@extends('layouts.app')
@section('content')

    <div class="content">
        <div class="left-side">
            <img src="{{asset('img/chefmenu.png')}}" alt="">
        </div>
        <div class="center">
            <div class="text">
                <h1>Most people choose us:</h1>
                <ul>
                    <li>This is the first line about our Restaurant</li>
                    <li>Wow it has to be amazing</li>
                    <li>Most people recomend it all the time</li>
                    <li>Won the last year price</li>
                </ul>
            </div>
        </div>
        <div class="right-side">
            <img src="" alt="">
        </div>
    </div>
    @include('components.carousel')
@endsection
