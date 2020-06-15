<nav class="home-nav">
    <div class="container">
        <a href="{{ route('venue/events') }}" class="brand brand-venue">Blipr</a>
        <ul class="large-nav">
            <li><a class="{{ (request()->is('venue/events')) ? 'active' : '' }}" href="{{ route('venue/events') }}">{{ __('Your events') }}</a></li>
            <li><a class="{{ (request()->is('venue/events/create')) ? 'active' : '' }}" href="{{ route('venue/events/create') }}">{{ __('Add event') }}</a></li>
            <li class="line">|</li>
            <li>{{Auth::guard('venue')->user()->name}}</li>
            <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>   
            </li>         
        </ul>
        <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</nav>