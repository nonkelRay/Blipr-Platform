<div class="vertical-nav">
    <a href="{{ route('home') }}" class="{{ (request()->is('user/home')) ? 'active' : '' }}"><img src="{{ @asset('images/logo.png') }}" alt=""></a>
    <a href="{{ route('home') }}" class="{{ (request()->is('user/events')) ? 'active' : '' }}"><img src="{{ @asset('images/calendar-nav.png') }}" alt=""></a>
    <a href="{{ route('user/blips') }}" class="{{ (request()->is('user/blips')) ? 'active' : '' }}"><img src="{{ @asset('images/blips-nav.png') }}" alt=""></a>
    <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{ @asset('images/logout-nav.png') }}" alt=""></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> 
</div>