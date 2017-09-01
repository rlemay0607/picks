<?php

namespace App\Http\Controllers;

use App\Setting;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Standings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function season()
    {
        $user = Auth::user();
        return view('standings.season')
            ->with('totalpoints', DB::table('user_picks')->where('user_id', $user->id)->sum('point'))
            ->with('seasoncorrect', DB::table('user_picks')->where([['user_id', $user->id],['point','1']])->count())
            ->with('seasontotal', DB::table('user_picks')->where('user_id', $user->id)->count())
            ->with('seasonpoints', DB::table('season_points_view')->orderBy('total', 'desc')->get())
            ->with('seasonmax', DB::table('season_points_view')->max('total'))
            ;

    }
public function weeklywinners()
    {
        return view('weekly_winners.index')
            ->with('week1s', DB::table('week_points_view')->where([['week_number', '1'],['total', DB::table('week_points_view')->where('week_number', '1')->max('total')]])->get())
            ->with('week2s', DB::table('week_points_view')->where([['week_number', '2'],['total', DB::table('week_points_view')->where('week_number', '2')->max('total')]])->get())
            ->with('week3s', DB::table('week_points_view')->where([['week_number', '3'],['total', DB::table('week_points_view')->where('week_number', '3')->max('total')]])->get())
            ->with('week4s', DB::table('week_points_view')->where([['week_number', '4'],['total', DB::table('week_points_view')->where('week_number', '4')->max('total')]])->get())
            ->with('week5s', DB::table('week_points_view')->where([['week_number', '5'],['total', DB::table('week_points_view')->where('week_number', '5')->max('total')]])->get())
            ->with('week6s', DB::table('week_points_view')->where([['week_number', '6'],['total', DB::table('week_points_view')->where('week_number', '6')->max('total')]])->get())
            ->with('week7s', DB::table('week_points_view')->where([['week_number', '7'],['total', DB::table('week_points_view')->where('week_number', '7')->max('total')]])->get())
            ->with('week8s', DB::table('week_points_view')->where([['week_number', '8'],['total', DB::table('week_points_view')->where('week_number', '8')->max('total')]])->get())
            ->with('week9s', DB::table('week_points_view')->where([['week_number', '9'],['total', DB::table('week_points_view')->where('week_number', '9')->max('total')]])->get())
            ->with('week10s', DB::table('week_points_view')->where([['week_number', '10'],['total', DB::table('week_points_view')->where('week_number', '10')->max('total')]])->get())
            ->with('week11s', DB::table('week_points_view')->where([['week_number', '11'],['total', DB::table('week_points_view')->where('week_number', '11')->max('total')]])->get())
            ->with('week12s', DB::table('week_points_view')->where([['week_number', '12'],['total', DB::table('week_points_view')->where('week_number', '12')->max('total')]])->get())
            ->with('week13s', DB::table('week_points_view')->where([['week_number', '13'],['total', DB::table('week_points_view')->where('week_number', '13')->max('total')]])->get())
            ->with('week14s', DB::table('week_points_view')->where([['week_number', '14'],['total', DB::table('week_points_view')->where('week_number', '14')->max('total')]])->get())
            ->with('week15s', DB::table('week_points_view')->where([['week_number', '15'],['total', DB::table('week_points_view')->where('week_number', '15')->max('total')]])->get())
            ->with('week16s', DB::table('week_points_view')->where([['week_number', '16'],['total', DB::table('week_points_view')->where('week_number', '16')->max('total')]])->get())
            ->with('week17s', DB::table('week_points_view')->where([['week_number', '17'],['total', DB::table('week_points_view')->where('week_number', '17')->max('total')]])->get())
            ->with('week18s', DB::table('week_points_view')->where([['week_number', '18'],['total', DB::table('week_points_view')->where('week_number', '18')->max('total')]])->get())
            ->with('week19s', DB::table('week_points_view')->where([['week_number', '19'],['total', DB::table('week_points_view')->where('week_number', '19')->max('total')]])->get())
            ->with('week20s', DB::table('week_points_view')->where([['week_number', '20'],['total', DB::table('week_points_view')->where('week_number', '20')->max('total')]])->get())
            ->with('week21s', DB::table('week_points_view')->where([['week_number', '21'],['total', DB::table('week_points_view')->where('week_number', '21')->max('total')]])->get())

            ;

    }

    public function week()
    {
        $user = Auth::user();
        $setting = Setting::first();
        return view('standings.week')
            ->with('totalpoints', DB::table('user_picks')->where('user_id', $user->id)->sum('point'))
            ->with('weekcorrect', DB::table('user_picks')->where([['user_id', $user->id],['point','1'], ['week_number', $setting->week_number]])->count())
            ->with('weektotal', DB::table('user_picks')->where([['user_id', $user->id],['week_number', $setting->week_number]])->count())
            ->with('weekpoints', DB::table('week_points_view')->where('week_number', $setting->week_number)->orderBy('total', 'desc')->get())
            ->with('weekmax', DB::table('week_points_view')->where('week_number', $setting->week_number)->max('total'))

            ;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
