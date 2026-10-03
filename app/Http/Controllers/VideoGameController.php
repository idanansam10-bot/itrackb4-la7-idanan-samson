<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    public function index(Request $request)
    {
        $games = $this->games();

        $genre = $request->query('genre', 'all');
        $developer = $request->query('developer', 'all');

        $filtered = [];

        foreach ($games as $item) {
            $genreMatch = $genre === 'all' || $item['genre'] === $genre;
            $developerMatch = $developer === 'all' || $item['developer'] === $developer;

            if ($genreMatch && $developerMatch) {
                $filtered[] = $item;
            }
        }

        return view('games.index', [
            'games' => $filtered,
            'genre' => $genre,
            'developer' => $developer
        ]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'developer' => 'required|in:Mojang Studios,Riot Games,HoYoverse,Moonton,ConcernedApe,Rockstar Games',
            'genre' => 'required|in:Sandbox,Shooter,RPG,MOBA,Simulation,Action',
            'year' => 'required|numeric|min:1900|max:2026'
        ]);

        $games = $this->games();

        $id = 1;

        foreach ($games as $item) {
            if ($item['id'] >= $id) {
                $id = $item['id'] + 1;
            }
        }

        $data['id'] = $id;

        $games[$id] = $data;

        $this->saveGames($games);

        return redirect()->route('games.index')
            ->with('success', 'Video game added successfully.');
    }

    public function show(string $id)
    {
        $games = $this->games();

        if (!isset($games[$id])) {
            abort(404);
        }

        $item = $games[$id];

        return view('games.show', [
            'item' => $item
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $games = $this->games();

        $item = $games[3];

        return view('games.featured', [
            'item' => $item
        ]);
    }

    private function games()
    {
        $path = storage_path('app/private/games.json');

        return json_decode(file_get_contents($path), true);
    }

    private function saveGames(array $games)
    {
        file_put_contents(
            storage_path('app/private/games.json'),
            json_encode($games, JSON_PRETTY_PRINT)
        );
    }
}