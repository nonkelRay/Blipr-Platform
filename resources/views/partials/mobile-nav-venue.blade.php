<div class="mobile-menu">
    <div class="container">
        <nav>
            <ul>
                    <li>{{Auth::guard('venue')->user()->name}}</li>
                    <li>
                        <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>   
                    </li>

            </ul>
            <ul>
                    <li><a class="nav-link" href="{{ route('venue/events') }}">{{ __('Your events') }}</a></li>
                    <li><a class="nav-link" href="{{ route('venue/events/create') }}">{{ __('Add event') }}</a></li>
            </ul>
        </nav>
        <div class="socials">
            <a href="https://www.instagram.com/blipr.app/" target="_blank"><img src="{{ asset('images/insta.png') }}" alt=""></a>
            <a href="https://www.facebook.com/Blipr-105156707830640" target="_blank"><img src="{{ asset('images/fb.png') }}" alt=""></a>
        </div>
    </div>
</div>