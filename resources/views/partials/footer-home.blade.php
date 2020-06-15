<footer class="large-footer">
    <div class="container">
        <ul>
            <li>Connect</li>
            <li><a href="https://www.facebook.com/Blipr-105156707830640" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com/blipr.app/" target="_blank">Instagram</a></li>
            <li><a href="mailto:hello@blipr.app">hello@blipr.app</a></li>
        </ul>
        <ul>
            <li>Info</li>
            <li><a href="/">Home</a></li>
            {{-- <li><a href="#how">How it works</a></li> --}}
            <li><a href="{{ route('venue/login') }}">Venues</a></li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
        </ul>
        <ul>
            <li>Platform</li>
            <li> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            {{-- <li><a href="#">Download</a></li> --}}
        </ul>
        <div class="copy">
            <img src="{{ asset("images/logo.png") }}" alt="">
            <span> &copy; {{ date("Y") }} Blipr</span>
        </div>
    </div>
</footer>