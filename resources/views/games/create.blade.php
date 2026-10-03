@extends('layouts.app')

@section('title', 'Add Video Game')

@section('content')

    <h2>Add Video Game</h2>

    <form method="POST" action="{{ route('games.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title">Game Title</label>

            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ old('title') }}"
            >

            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="developer">Developer</label>

            <select name="developer" id="developer" class="form-control">
                <option value="">Select Developer</option>
                <option value="Mojang Studios" @selected(old('developer') === 'Mojang Studios')>Mojang Studios</option>
                <option value="Riot Games" @selected(old('developer') === 'Riot Games')>Riot Games</option>
                <option value="HoYoverse" @selected(old('developer') === 'HoYoverse')>HoYoverse</option>
                <option value="Moonton" @selected(old('developer') === 'Moonton')>Moonton</option>
                <option value="ConcernedApe" @selected(old('developer') === 'ConcernedApe')>ConcernedApe</option>
                <option value="Rockstar Games" @selected(old('developer') === 'Rockstar Games')>Rockstar Games</option>
            </select>

            @error('developer')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre">Genre</label>

            <select name="genre" id="genre" class="form-control">
                <option value="">Select Genre</option>
                <option value="Sandbox" @selected(old('genre') === 'Sandbox')>Sandbox</option>
                <option value="Shooter" @selected(old('genre') === 'Shooter')>Shooter</option>
                <option value="RPG" @selected(old('genre') === 'RPG')>RPG</option>
                <option value="MOBA" @selected(old('genre') === 'MOBA')>MOBA</option>
                <option value="Simulation" @selected(old('genre') === 'Simulation')>Simulation</option>
                <option value="Action" @selected(old('genre') === 'Action')>Action</option>
            </select>

            @error('genre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year">Year</label>

            <input
                type="number"
                name="year"
                id="year"
                class="form-control"
                value="{{ old('year') }}"
            >

            @error('year')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Add Game
        </button>

        <a href="{{ route('games.index') }}" class="btn btn-secondary">
            Cancel
        </a>
    </form>

@endsection