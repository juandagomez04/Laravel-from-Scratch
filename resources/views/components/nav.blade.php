<nav class="navbar max-w-3xl mx-auto">
    <div class="navbar-start">
        <a class="text-xl font-bold" href="/ideas">Idea</a>
    </div>
    <div class="navbar-end gap-2">
        <a class="btn btn-ghost" href="/ideas">Home</a>
        <a class="btn btn-ghost" href="/ideas/create">New Idea</a>

        @guest
            <a class="btn btn-ghost" href="/login">Login</a>
            <a class="btn btn-primary" href="/register">Register</a>
        @else
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-ghost">Logout</button>
            </form>
        @endauth
    </div>
</nav>