<?php

namespace App\Http\Controllers;

use App\MasterGames;
use App\Setting;
use App\UserPicks;
use Auth;
use Illuminate\Http\Request;
use Session;


class MasterGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_games.index')
            ->with('week', Setting::first())
            ->with('games', MasterGames::orderBy('week_number', 'dec')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings=Setting::first();
        $mastergame = MasterGames::create([
            'favorit' => $request->favorit,
            'underdog' => $request->underdog,
            'spread' => $request->spread,
            'game_time' => $request->game_time,
            'week_number' =>$settings->week_number,
            'home_team' => $request->home_team

        ]);



        return redirect()->route('mastergame.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = MasterGames::find($id);
        return view('master_games.edit')->with('game', $game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = MasterGames::find($id);
        $game->favorit = $request->favorit;
        $game->spread = $request->spread;
        $game->underdog = $request->underdog;
        $game->game_time = $request->game_time;
        $game->home_team = $request->home_team;

        $game->save();
        return redirect()->route('mastergame.index');
    }
    public function gamescore(Request $request, $id)
    {
        $game = MasterGames::find($id);

        $game->winner = $request->score;
        $game->scored = '1';

        $game->save();

        $picks = UserPicks::where([['master_game_id', '=', $game->id], ['pick','=', $game->winner]])->get();
        foreach ($picks as $pick)
            ([
                $pick->point='1',
                $pick->game_scored='1',
                $pick->save()



            ]);

        $pick2s = UserPicks::where([['master_game_id', '=', $game->id], ['pick','!=', $game->winner]])->get();
        foreach ($pick2s as $pick2)
            ([
                $pick2->point='0',
                $pick2->game_scored='1',
                $pick2->save()



            ]);




        return redirect()->route('mastergame.index');
    }

    public function score($id)
    {
        $game = MasterGames::find($id);
        return view('master_games.score')->with('game', $game);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = MasterGames::find($id);
        $game->delete();

        Session::flash('success', 'Game has been deleted');
        return redirect()->back();
    }
    public function gamelock($id)
    {
        $game = MasterGames::find($id);
        $mastergame = UserPicks::where('master_game_id', $game->id)->get();

        $game->locked = 1;
        $game->save();
        foreach ($mastergame as $mastergames)
            ([
                $mastergames->locked='1',
                $mastergames->save()

            ]);

        return redirect()->back();

    }
    public function gameunlock($id)
    {
        $game = MasterGames::find($id);
        $mastergame = UserPicks::where('master_game_id', $game->id)->get();

        $game->locked = 0;
        $game->save();
        foreach ($mastergame as $mastergames)
            ([
                $mastergames->locked='0',
                $mastergames->save()

            ]);
        return redirect()->back();

    }
}
