@if (Route::has('login'))
<ul class="nav navbar-nav navbar-right">
    @if (Auth::check())
        <li><a href="{{ url('/home') }}">Home</a></li>
    @else
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    @endif
</ul>
@endif