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
