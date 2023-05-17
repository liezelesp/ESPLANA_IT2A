<ul style="display: flex; flex-direction: column; flex-wrap: wrap; padding-left: 16px; margin-top: 16px;">
    <li>
        <a href="/login" style="display: block; padding: 8px 16px; text-decoration: none; color: #333; background-color: #f8f8f8; border-radius: 5px; margin-bottom: 8px;">Sign In</a>
    </li>
    <li>
        <a href="/register" style="display: block; padding: 8px 16px; text-decoration: none; color: #333; background-color: #f8f8f8; border-radius: 5px; margin-bottom: 8px;">Sign Up</a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button style="display: block; padding: 8px 16px; border: none; background-color: #f8f8f8; color: #333; border-radius: 5px; cursor: pointer;">Logout</button>
        </form>
    </li>
</ul>
