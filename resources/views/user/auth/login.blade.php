@extends('layouts.app')

@section('content')
<div class="login main-content">
    <div class="container">
        <h1>Login</h1>
        <img class="hero" src="{{ asset('images/login-image.png') }}" alt="">
        <form class="form login-form" method="POST" action="{{ route('login') }}">
            <h1>Login</h1>
            @csrf
            <input id="email" type="email" placeholder="E-mail" class="form-control field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password" type="password" placeholder="Password" class="form-control field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="btn btn-submit">
                {{ __('Login') }}
            </button>
            <div class="options">
                @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <a class="btn-link" href="{{ route('register') }}">No account yet?</a>
            </div>
            <div class="stripe"><span></span>or<span></span></div>
            <a href="{{url('/login/facebook')}}" class="btn fb-login">Login with Facebook<img src="{{ asset('images/fb.png') }}" alt=""></a>
        </form>
    </div>
</div>
@endsection
