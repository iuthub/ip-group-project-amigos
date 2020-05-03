@extends('layouts.master')
@section('content')
<div class="form-container">
    <div class="title mt-5">
        <p class="restourant_name pt-3">WELCOME TO AMIGOS</p>
    </div>
    <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
           
        </div>
        <button type="submit" class="btn btn-secondary">
        {{ __('Login') }}
        </button>
         </label>
            @if (Route::has('password.request'))
            <a class="text-body" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
    </form>
</div>

@endsection