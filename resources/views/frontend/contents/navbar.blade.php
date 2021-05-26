<nav>
    <ul>
        @guest
            <li>
                <a href="{{route('login.index')}}">Login</a>
            </li>
            <li>
                <a href="{{route('register.index')}}">Register</a>
            </li>
        @endguest
        @auth
            <li>
                <a href="{{route('profile.index')}}">Profile</a>
            </li>
            @Admin
                <li>
                    <a href="{{route('profile.admin')}}">Admin Page</a>
                </li>
            @endAdmin
            <a href="{{route('profile.logout')}}">Logout</a>
        @endauth
    </ul>
</nav>