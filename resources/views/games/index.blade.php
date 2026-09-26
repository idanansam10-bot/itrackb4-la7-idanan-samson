@extends('layouts.app')

@section('title', 'Video Games')

@section('content')
<h2>Video Game List</h2>

<p>Genre: {{ $genre }} | Developer: {{ $developer }}</p>

<h5>Filter by Genre</h5>

@if ($developer === 'all')
<a href="{{ route('games.index') }}">All Genres</a>
<a href="{{ route('games.index', ['genre'=>'Sandbox']) }}">Sandbox</a>
<a href="{{ route('games.index', ['genre'=>'Shooter']) }}">Shooter</a>
<a href="{{ route('games.index', ['genre'=>'RPG']) }}">RPG</a>
<a href="{{ route('games.index', ['genre'=>'MOBA']) }}">MOBA</a>
<a href="{{ route('games.index', ['genre'=>'Simulation']) }}">Simulation</a>
<a href="{{ route('games.index', ['genre'=>'Action']) }}">Action</a>
@else
<a href="{{ route('games.index', ['developer'=>$developer]) }}">All Genres</a>
<a href="{{ route('games.index', ['genre'=>'Sandbox','developer'=>$developer]) }}">Sandbox</a>
<a href="{{ route('games.index', ['genre'=>'Shooter','developer'=>$developer]) }}">Shooter</a>
<a href="{{ route('games.index', ['genre'=>'RPG','developer'=>$developer]) }}">RPG</a>
<a href="{{ route('games.index', ['genre'=>'MOBA','developer'=>$developer]) }}">MOBA</a>
<a href="{{ route('games.index', ['genre'=>'Simulation','developer'=>$developer]) }}">Simulation</a>
<a href="{{ route('games.index', ['genre'=>'Action','developer'=>$developer]) }}">Action</a>
@endif

<h5>Filter by Developer</h5>

@if ($genre === 'all')
<a href="{{ route('games.index') }}">All Developers</a>
<a href="{{ route('games.index', ['developer'=>'Mojang Studios']) }}">Mojang Studios</a>
<a href="{{ route('games.index', ['developer'=>'Riot Games']) }}">Riot Games</a>
<a href="{{ route('games.index', ['developer'=>'HoYoverse']) }}">HoYoverse</a>
<a href="{{ route('games.index', ['developer'=>'Moonton']) }}">Moonton</a>
<a href="{{ route('games.index', ['developer'=>'ConcernedApe']) }}">ConcernedApe</a>
<a href="{{ route('games.index', ['developer'=>'Rockstar Games']) }}">Rockstar Games</a>
@else
<a href="{{ route('games.index', ['genre'=>$genre]) }}">All Developers</a>
<a href="{{ route('games.index', ['genre'=>$genre,'developer'=>'Mojang Studios']) }}">Mojang Studios</a>
<a href="{{ route('games.index', ['genre'=>$genre,'developer'=>'Riot Games']) }}">Riot Games</a>
<a href="{{ route('games.index', ['genre'=>$genre,'developer'=>'HoYoverse']) }}">HoYoverse</a>
<a href="{{ route('games.index', ['genre'=>$genre,'developer'=>'Moonton']) }}">Moonton</a>
<a href="{{ route('games.index', ['genre'=>$genre,'developer'=>'ConcernedApe']) }}">ConcernedApe</a>
<a href="{{ route('games.index', ['genre'=>$genre,'developer'=>'Rockstar Games']) }}">Rockstar Games</a>
@endif

<p>
<a href="{{ route('games.index') }}">Clear Both Filters</a>
</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Title</th>
            <th>Developer</th>
            <th>Genre</th>
            <th>Year</th>
        </tr>
    </thead>

    <tbody>
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
            <td>{{ $item['year'] }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                No games are available.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection