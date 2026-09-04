<!DOCTYPE html>
<html>
<head>
    <title>Video Game Filter</title>
</head>
<body>

    <h1>Video Game Collection</h1>

    <h2>Active Filter: {{ $activeFilter }}</h2>

    @if (count($games) > 0)

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

    @else

        <p>No games found for this filter.</p>

    @endif

    <br>

    <a href="{{ route('games.index') }}">
        Back to Game List
    </a>

</body>
</html>