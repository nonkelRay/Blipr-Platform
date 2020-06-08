@extends('layouts.app')

@section('content')
<div class="register main-content">
    <div class="container">
        <img class="hero" src="{{ asset('images/register-image.png') }}" alt="">
        <form class="form register-form" method="POST" action="{{ route('register') }}">
            <h1>Register</h1>
            @csrf
            <input id="name" type="text" placeholder="Name" class="form-control field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="email" type="email" placeholder="E-mail" class="form-control field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="date_of_birth" type="date" class="form-control field @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
            @error('date_of_birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password" type="password" placeholder="Password" class="form-control field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control field" name="password_confirmation" required autocomplete="new-password">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
            <div class="stripe"><span></span>or<span></span></div>
            <a href="{{url('/login/facebook')}}" class="btn fb-login">Login with Facebook<img src="{{ asset('images/fb.png') }}" alt=""></a>
        </form>
    </div>
</div>
@endsection
