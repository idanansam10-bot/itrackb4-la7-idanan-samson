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

    private function games()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Minecraft',
                'developer' => 'Mojang Studios',
                'genre' => 'Sandbox',
                'year' => 2011,
            ],

            2 => [
                'id' => 2,
                'title' => 'Valorant',
                'developer' => 'Riot Games',
                'genre' => 'Shooter',
                'year' => 2020,
            ],

            3 => [
                'id' => 3,
                'title' => 'Genshin Impact',
                'developer' => 'HoYoverse',
                'genre' => 'RPG',
                'year' => 2020,
            ],

            4 => [
                'id' => 4,
                'title' => 'Mobile Legends',
                'developer' => 'Moonton',
                'genre' => 'MOBA',
                'year' => 2016,
            ],

            5 => [
                'id' => 5,
                'title' => 'Stardew Valley',
                'developer' => 'ConcernedApe',
                'genre' => 'Simulation',
                'year' => 2016,
            ],

            6 => [
                'id' => 6,
                'title' => 'Grand Theft Auto V',
                'developer' => 'Rockstar Games',
                'genre' => 'Action',
                'year' => 2013,
            ],
        ];
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
}