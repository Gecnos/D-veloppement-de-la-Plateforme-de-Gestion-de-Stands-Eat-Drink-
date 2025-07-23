<header class="header w-[500px] rounded-sm bg-black p-3 shadow-md">
    <nav>
        <ul class="flex justify-between gap-2">
            <li>
                <a class="{{ request()->routeIs('contact') ? "link":"" }}" href={{ route('contact') }}>Contact</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('register') ? "link":"" }}" href={{ route('register') }}>Register</a>
            </li>
            <li>
                <a href={{ route('login') }} class="{{ request()->routeIs('login') ? "link":"" }}">Login</a>
            </li>
        </ul>
    </nav>
</header>