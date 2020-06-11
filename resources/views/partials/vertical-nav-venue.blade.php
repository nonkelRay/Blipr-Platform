<div class="vertical-nav">
    <a href="{{ route('venue/home') }}" class="brand">Blipr</a>
    <a href="{{ route('venue/events') }}" >Events</a>
    <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> 
</div>