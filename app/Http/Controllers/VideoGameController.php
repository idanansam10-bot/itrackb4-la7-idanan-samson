<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoGameController extends Controller
{
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

    public function index()
    {
         $games = $this->games();

        return view('games.index' , [
            'games' => $games
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
