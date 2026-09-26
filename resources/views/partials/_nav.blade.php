<nav class="nav mb-4">
    <a class="nav-link {{ request()->is('games*') ? 'active' : '' }}" href="{{ route('games.index') }}">
        Video Games
    </a>
</nav>