<?php

namespace App\Http\Controllers;


use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://api.rawg.io/api/games?key=673d63746a2345afaaa2550d83565f32&page_size=10000');

        if($response->successful()) {
            $games = $response->json()['results'];

            // Adicione a linha de depuração aqui
            //dd($games);

            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $perPage = 10;

            $gamesCollection = collect($games);
            $currentPageGames = $gamesCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
            $games = new LengthAwarePaginator($currentPageGames, count($gamesCollection), $perPage);
            $games->setPath(request()->url());

            return view('pages.games.list', compact('games'));
        } else {
            return response()->json(['error' => 'Erro ao acessar a API Rawg'], 500);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
