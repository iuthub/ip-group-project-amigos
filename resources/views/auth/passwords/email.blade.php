@extends('layouts.master')

@section('content')
<div class="form-container">
                <br><br><br><br><br><br>
                <div class="welcoming"><p class="settings">{{ __('Reset Password') }}</p></div>
                <div class="form-group">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
