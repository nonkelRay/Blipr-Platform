<div class="mobile-menu">
    <div class="container">
        <nav>
            <ul>
                @guest
                        <li> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
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
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('user/blips') }}">Blips</a></li>
                <li><a href="{{ route('user/blips') }}">Calendar</a></li>
            </ul>
        </nav>
        <div class="socials">
            <a href="https://www.instagram.com/blipr.app/" target="_blank"><img src="{{ asset('images/insta.png') }}" alt=""></a>
            <a href="https://www.facebook.com/Blipr-105156707830640" target="_blank"><img src="{{ asset('images/fb.png') }}" alt=""></a>
        </div>
    </div>
</div>