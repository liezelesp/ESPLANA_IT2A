<nav x-data="{ open: false }" style="background-color: #333; position: fixed; width: 100%; z-index: 20; top: 0; left: 0; border-bottom: 1px solid #ccc; padding: 10px 20px; color: #fff;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        <a href="/" style="text-decoration: none;">
            <span style="font-size: 24px; font-weight: bold; white-space: nowrap;">
                {{ $data['title'] }}
            </span>
        </a>
        <button @click="open = !open" class="menu-button" style="background-color: transparent; border: none; cursor: pointer;">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48" style="fill: #fff;">
                <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" fill="#fff"/>
            </svg>
        </button>

        <div x-show="open" id="navbar-main" style="display: flex;">
            <ul style="display: flex; flex-direction: column; padding: 0; margin-top: 10px; list-style: none;">
                <li>
                    <a href="{{ route('login') }}" style="display: block; padding: 10px 15px; color: #fff; text-decoration: none; background-color: #444; border-radius: 5px; margin-bottom: 8px;">Sign In</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" style="display: block; padding: 10px 15px; color: #fff; text-decoration: none; background-color: #444; border-radius: 5px; margin-bottom: 8px;">Sign Up</a>
                </li>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" style="display: block; padding: 10px 15px; color: #fff; text-decoration: none; background-color: #444; border: none; border-radius: 5px; margin-bottom: 8px; cursor: pointer;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
