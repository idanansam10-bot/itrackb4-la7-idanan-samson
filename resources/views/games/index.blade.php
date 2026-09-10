@extends('layouts.app')

@section('title', 'Video Game Collection')

@section('content')

    <p>
        <a href="{{ route('games.featured') }}">
            View Featured Game
        </a>
    </p>

    <p>
        <a href="{{ route('games.filter') }}">
            View All Games
        </a>
    </p>

    <table class="table table-striped table-bordered">
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Game</th>
            <th>Developer</th>
            <th>Genre</th>
            <th>Year</th>
        </tr>

        @forelse ($games as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['id'] }}</td>

                <td>
                    <a href="{{ route('games.show', $item['id']) }}">
                        {{ $item['title'] }}
                    </a>
                </td>

                <td>{{ $item['developer'] }}</td>
                <td>{{ $item['genre'] }}</td>

                <td>
                    {{ $item['year'] }}

                    @if ($item['year'] == 2026)
                        <strong>Latest</strong>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    No games are available right now.
                </td>
            </tr>
        @endforelse

    </table>

@endsection