<!DOCTYPE html>
<html>
<head>
    <title>Video Game Collection</title>
</head>
<body>

    <h1>My Video Game Collection</h1>

    <p>Created by: Samson Idanan Jr.</p>

    <p>
        <a href="{{ route('games.featured') }}">
            ⭐ View Featured Game
        </a>
    </p>

    <p>
        <a href="{{ route('games.filter') }}">
            View All Games
        </a>
    </p>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Game</th>
            <th>Developer</th>
            <th>Genre</th>
            <th>Year</th>
        </tr>

        @foreach ($games as $item)
            <tr>
                <td>{{ $item['id'] }}</td>

                <td>
                    <a href="{{ route('games.show', $item['id']) }}">
                        {{ $item['title'] }}
                    </a>
                </td>

                <td>{{ $item['developer'] }}</td>
                <td>{{ $item['genre'] }}</td>
                <td>{{ $item['year'] }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>