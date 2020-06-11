@extends('layouts.app')

@section('content')
<div class="login-venue main-content">
    <div class="filler"></div>
    <div class="container">
        <p class="info info--large">
            This is where we welcome our participating venues.
            We made a platform where venues can add their events. This way our users will get a heads up of your upcoming event. After the show you will be able to upload the recordings of the concert. Basically all the features you need to make your venue Blipr-ready in one place!
            <span>Are you interested in getting a venue account? <br> Contact us at <a href="mailto:">venue@blipr.app</a></span> 
        </p>
        <form class="form login-form" method="POST" action="">
            <h1>Venue login</h1>
            <p class="info info--small">
                This is where we welcome our participating venues.
                We made a platform where venues can add their events. This way our users will get a heads up of your upcoming event. After the show you will be able to upload the recordings of the concert. Basically all the features you need to make your venue Blipr-ready in one place!
                <span>Are you interested in getting a venue account? <br> Contact us at <a href="mailto:">venue@blipr.app</a></span> 
            </p>
            @csrf
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="email" type="email" placeholder="E-mail" class="form-control field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <input id="password" type="password" placeholder="Password" class="form-control field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
                <a class="btn-link" href="{{ route('login') }}">Not a venue?</a>
            </div>
        </form>
    </div>
</div>
@endsection
