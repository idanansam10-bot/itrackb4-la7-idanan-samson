<?php

namespace App\Http\Controllers;

class VideoGameController extends Controller
{
    public function index()
    {
        $games = $this->games();

        return view('games.index', [
            'games' => $games
        ]);
    }

    public function show($id)
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

    public function featured()
    {
        $games = $this->games();

        $item = $games[3];

        return view('games.featured', [
            'item' => $item
        ]);
    }

    public function filter($value = null)
    {
        $games = $this->games();

        if ($value === null) {
            return view('games.filter', [
                'games' => $games,
                'activeFilter' => 'All'
            ]);
        }

        $filtered = [];

        foreach ($games as $item) {
            if ($item['genre'] === $value) {
                $filtered[] = $item;
            }
        }

        return view('games.filter', [
            'games' => $filtered,
            'activeFilter' => $value
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
}