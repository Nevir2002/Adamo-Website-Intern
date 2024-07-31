<nav class="header">
    <ul>
        <li><a href="{{ route('products') }}">Home</a></li>
        {{-- <li><a href="{{ route('about') }}">About</a></li> --}}
        {{-- <li><a href="{{ route('contact') }}">Contact</a></li> --}}
        @auth
            {{-- <li><a href="{{ route('dashboard') }}">Dashboard</a></li> --}}
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('getRegister') }}">Register</a></li>
        @endauth
    </ul>
</nav>