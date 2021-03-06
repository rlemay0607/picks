<?php

namespace App\Http\Controllers;
use App\Mail\WeeklyPicksCreated;
use App\MasterGames;
use App\Setting;
use App\User;
use App\UserPicks;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use Session;


class UserGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function adminuserpicks()
    {
        $setting = Setting::first();
        return view('user_picks.index')
            ->with('picks', DB::table('user_picks')->where([['week_number', $setting->week_number]])->orderBy('user_id','asc')->get());
    }

    public function updatepick(Request $request, $id)
    {
        $pick = UserPicks::find($id);
        $pick->pick = $request->options;
        $pick->user_update_by = Auth::User()->name;
        $pick->save();
        Session::flash('flash_message', ($pick->master_favorit . ' vs '. $pick->master_underdog.' game was saved '));
        return redirect()->back();

    }
    public function updateusersheet(Request $request, $id)
    {
        $pick = UserPicks::find($id);
        $pick->pick = $request->options;
        $pick->save();

        return redirect()->back();

    }

    public function week1()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '1'],['user_id', Auth::User()->id]])->get())
            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '1'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '1'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '1'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '1'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '1'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '1'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '1'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '1'], ['game_time', 'sunday_morning']])->count())
            ->with('monday_night', DB::table('user_picks')->where([['week_number', '1'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '1'], ['game_time', 'monday_night']])->count())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'saturday_night']])->count())


            ;
    }


    public function week2()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '2'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '2'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '2'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week3()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '3'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '3'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '3'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week4()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '4'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '4'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '4'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week5()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '5'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '5'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '5'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week6()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '6'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '6'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '6'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week7()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '7'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '7'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '7'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week8()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '8'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '8'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '8'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week9()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '9'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '9'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '9'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week10()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '10'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '10'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '10'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week11()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '11'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '11'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '11'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week12()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '12'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '12'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '12'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week13()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '13'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '13'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '13'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week14()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '14'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '14'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '14'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week15()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '15'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '15'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '15'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week16()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '16'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '16'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '16'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week17()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '17'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '17'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '17'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week18()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '18'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '18'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '18'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week19()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '19'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '19'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '19'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week20()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '20'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '20'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '20'], ['game_time', 'monday_night']])->count())


            ;
    }
public function week21()
    {


        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', '21'],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'monday_night']])->count())

            ->with('super_bowl', DB::table('user_picks')->where([['week_number', '21'],['user_id',  Auth::User()->id], ['game_time', 'super_bowl']])->get())
            ->with('super_bowl_count', DB::table('user_picks')->where([['week_number', '21'], ['game_time', 'super_bowl']])->count())


            ;
    }

public function curentweek()
    {
        $settings = Setting::first();

        return view('user_picks.update')
            ->with('team_name', User::where('id', Auth::User())->first())
            ->with('games', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id', Auth::User()->id]])->get())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'sunday_late']])->count())
            ->with('sunday_night', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'sunday_night']])->count())
            ->with('sunday_morning', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'monday_night']])->count())

            ->with('super_bowl', DB::table('user_picks')->where([['week_number', $settings->week_number],['user_id',  Auth::User()->id], ['game_time', 'super_bowl']])->get())
            ->with('super_bowl_count', DB::table('user_picks')->where([['week_number', $settings->week_number], ['game_time', 'super_bowl']])->count())



            ;
    }

    public function setfavorites()
    {
        $settings = Setting::first();
        $userspicks = UserPicks::where([['week_number', $settings->week_number] , ['user_id' , Auth::User()->id], ['locked', NULL] ])->get();
        foreach ($userspicks as $userpick){
            $userpick->pick = 'f';
            $userpick->user_update_by = Auth::User()->name;
            /*$userpick->user_update_time = Carbon::now();*/
            $userpick->save();
        }
        return redirect()->back();
    }

    public function setunderdog()
    {
        $settings = Setting::first();
        $userspicks = UserPicks::where([['week_number', $settings->week_number] , ['user_id' , Auth::User()->id], ['locked', NULL] ])->get();
        foreach ($userspicks as $userpick){
            $userpick->pick = 'u';
            $userpick->user_update_by = Auth::User()->name;
            /*$userpick->user_update_time = Carbon::now();*/
            $userpick->save();
        }
        return redirect()->back();
    }

    public function setrandom()
    {
        $settings = Setting::first();
        $userspicks = UserPicks::where([['week_number', $settings->week_number] , ['user_id' , Auth::User()->id], ['locked', NULL] ])->get();
        $str = 'uf';
        foreach ($userspicks as $userpick){
            $userpick->pick = substr(str_shuffle($str),1);
            $userpick->user_update_by = Auth::User()->name;
            /*$userpick->user_update_time = Carbon::now();*/
            $userpick->save();
        }
        return redirect()->back();
    }


    public function createsheet(Request $request)
    {
        $settings = Setting::first();
        $users = User::where([['active', '1'], ['week_created', '<', $settings->week_number ]])->get();
        $mastergame = MasterGames::where('week_number', $settings->week_number)->get();



        foreach ($users as $user) {
            if ($user->options == 'f') {
                foreach ($mastergame as $mastergames)
                    $userpicks = UserPicks::create([
                        'week_number' => $mastergames->week_number,
                        'user_id' => $user->id,
                        'master_game_id' => $mastergames->id,
                        'master_favorit' => $mastergames->favorit,
                        'master_underdog' => $mastergames->underdog,
                        'master_spread' => $mastergames->spread,
                        'game_time' => $mastergames->game_time,
                        'pick' => 'f',
                        'home_team' =>$mastergames->home_team,
                        'playoff_name' =>$mastergames->playoff_name,
                        'game_type' => $mastergames->game_type,
                        /*'user_update_time' => Carbon::now(),*/
                        'user_update_by' => 'System',
                    ]);
            }

            if ($user->options == 'r') {
              $str = 'uf';
                foreach ($mastergame as $mastergames)



                    $userselection = UserPicks::create([
                        'week_number' => $mastergames->week_number,
                        'user_id' => $user->id,
                        'master_game_id' => $mastergames->id,
                        'master_favorit' => $mastergames->favorit,
                        'master_underdog' => $mastergames->underdog,
                        'master_spread' => $mastergames->spread,
                        'game_time' => $mastergames->game_time,
                        'home_team' =>$mastergames->home_team,
                        'pick' => substr(str_shuffle($str),1),
                        'playoff_name' =>$mastergames->playoff_name,
                        'game_type' => $mastergames->game_type,
                        /*'user_update_time' => Carbon::now(),*/
                        'user_update_by' => 'System',
                    ]);

            }
            if ($user->options == 'u') {
                foreach ($mastergame as $mastergames)
                    $userpicks = UserPicks::create([
                        'week_number' => $mastergames->week_number,
                        'user_id' => $user->id,
                        'master_favorit' => $mastergames->favorit,
                        'master_underdog' => $mastergames->underdog,
                        'master_spread' => $mastergames->spread,
                        'master_game_id' => $mastergames->id,
                        'game_time' => $mastergames->game_time,
                        'pick' => 'u',
                        'home_team' =>$mastergames->home_team,
                        'playoff_name' =>$mastergames->playoff_name,
                        'game_type' => $mastergames->game_type,
                        /*'user_update_time' => Carbon::now(),*/
                        'user_update_by' => 'System',
                    ]);
            }

            $user->week_created = $settings->week_number;

                        $user->save();

         Mail::to($user->email)->send(new WeeklyPicksCreated($user, $settings));


            }



        return redirect()->back();
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
        $user = User::where('team_name', $id)->first();
        $setting = Setting::first();


        return view('weeksheets.user')
            ->with('wins_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_scored', '1'], ['point', '1'],['user_id', $user->id]])->count())
            ->with('loss_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_scored', '1'], ['point', '0'],['user_id', $user->id]])->count())
            ->with('team_name', User::where('team_name', $id)->first())
            ->with('saturday_early', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'saturday_early']])->get())
            ->with('saturday_early_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'saturday_early']])->count())
            ->with('saturday_late', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'saturday_late']])->get())
            ->with('saturday_late_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'saturday_late']])->count())
            ->with('saturday_night', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'saturday_night']])->get())
            ->with('saturday_night_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'saturday_night']])->count())

            ->with('sunday_early', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'sunday_early']])->get())
            ->with('sunday_early_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'sunday_early']])->count())
            ->with('sunday_late', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'sunday_late']])->get())
            ->with('sunday_late_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'sunday_late']])->count())
           ->with('sunday_night', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'sunday_night']])->get())
            ->with('sunday_night_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'sunday_night']])->count())
           ->with('sunday_morning', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'sunday_morning']])->get())
            ->with('sunday_morning_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'sunday_morning']])->count())

            ->with('monday_night', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'monday_night']])->get())
            ->with('monday_night_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'monday_night']])->count())

            ->with('super_bowl', DB::table('user_picks')->where([['week_number', $setting->week_number],['user_id', $user->id], ['locked', '1'],['game_time', 'super_bowl']])->get())
            ->with('super_bowl_count', DB::table('user_picks')->where([['week_number', $setting->week_number], ['game_time', 'super_bowl']])->count())

            ;
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
        $game = UserPicks::find($id);
        $game->delete();

        Session::flash('success', 'User has been deleted');
        return redirect()->back();
    }
}
