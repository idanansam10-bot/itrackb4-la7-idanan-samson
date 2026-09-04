<!DOCTYPE html>
<html>
<head>
    <title>Featured Video Game</title>
</head>
<body>

    <h1>⭐ Featured Video Game</h1>

    <h2>{{ $item['title'] }}</h2>

    <p><strong>ID:</strong> {{ $item['id'] }}</p>
    <p><strong>Game:</strong> {{ $item['title'] }}</p>
    <p><strong>Developer:</strong> {{ $item['developer'] }}</p>
    <p><strong>Genre:</strong> {{ $item['genre'] }}</p>
    <p><strong>Year:</strong> {{ $item['year'] }}</p>

    <p>Created by: Samson Idanan Jr.</p>

    <a href="{{ route('games.index') }}">
        Back to Game List
    </a>

</body>
</html>