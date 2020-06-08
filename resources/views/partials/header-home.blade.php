<nav class="home-nav">
    <div class="container">
        <a href="/" class="brand">Blipr</a>
        <ul class="large-nav">
            <li><a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Venues</a></li>
            <li><a class="{{ (request()->is('pricing')) ? 'active' : '' }}" href="{{ route('pricing') }}">{{ __('Pricing') }}</a></li>
            <li class="line">|</li>
            @guest
                <li> <a class="{{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                    <li><a class="{{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else 
                <li>{{ Auth::user()->name }}</li>
                <li>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>   
                </li>
            @endguest           
        </ul>
        <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</nav>