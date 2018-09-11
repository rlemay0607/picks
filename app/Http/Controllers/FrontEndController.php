<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Profile;
use App\Setting;
use App\Tag;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;


class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        $user = Auth::user();
        $setting = Setting::first();


        return view('index')
            ->with('settings', Setting::first())
            ->with('profile', Profile::first())
            ->with('user', User::first()->skip(1)->take(1)->get()->first())
            ->with('week1', DB::table('user_picks')->where([['week_number', '1'],['user_id', $user->id]])->sum('point'))
            ->with('week2', DB::table('user_picks')->where([['week_number', '2'],['user_id', $user->id]])->sum('point'))
            ->with('week3', DB::table('user_picks')->where([['week_number', '3'],['user_id', $user->id]])->sum('point'))
            ->with('week4', DB::table('user_picks')->where([['week_number', '4'],['user_id', $user->id]])->sum('point'))
            ->with('week5', DB::table('user_picks')->where([['week_number', '5'],['user_id', $user->id]])->sum('point'))
            ->with('week6', DB::table('user_picks')->where([['week_number', '6'],['user_id', $user->id]])->sum('point'))
            ->with('week7', DB::table('user_picks')->where([['week_number', '7'],['user_id', $user->id]])->sum('point'))
            ->with('week8', DB::table('user_picks')->where([['week_number', '8'],['user_id', $user->id]])->sum('point'))
            ->with('week9', DB::table('user_picks')->where([['week_number', '9'],['user_id', $user->id]])->sum('point'))
            ->with('week10', DB::table('user_picks')->where([['week_number', '10'],['user_id', $user->id]])->sum('point'))
            ->with('week11', DB::table('user_picks')->where([['week_number', '11'],['user_id', $user->id]])->sum('point'))
            ->with('week12', DB::table('user_picks')->where([['week_number', '12'],['user_id', $user->id]])->sum('point'))
            ->with('week13', DB::table('user_picks')->where([['week_number', '13'],['user_id', $user->id]])->sum('point'))
            ->with('week14', DB::table('user_picks')->where([['week_number', '14'],['user_id', $user->id]])->sum('point'))
            ->with('week15', DB::table('user_picks')->where([['week_number', '15'],['user_id', $user->id]])->sum('point'))
            ->with('week16', DB::table('user_picks')->where([['week_number', '16'],['user_id', $user->id]])->sum('point'))
            ->with('week17', DB::table('user_picks')->where([['week_number', '17'],['user_id', $user->id]])->sum('point'))
            ->with('week18', DB::table('user_picks')->where([['week_number', '18'],['user_id', $user->id]])->sum('point'))
            ->with('week19', DB::table('user_picks')->where([['week_number', '19'],['user_id', $user->id]])->sum('point'))
            ->with('week20', DB::table('user_picks')->where([['week_number', '20'],['user_id', $user->id]])->sum('point'))
            ->with('week21', DB::table('user_picks')->where([['week_number', '21'],['user_id', $user->id]])->sum('point'))
            ->with('totalpoints', DB::table('user_picks')->where('user_id', $user->id)->sum('point'))
            ->with('seasoncorrect', DB::table('user_picks')->where([['user_id', $user->id],['point','1']])->count())
            ->with('weekcorrect', DB::table('user_picks')->where([['user_id', $user->id],['point','1'], ['week_number', $setting->week_number]])->count())
            ->with('seasontotal', DB::table('user_picks')->where([['user_id', $user->id],['game_scored','1']])->count())
            ->with('weektotal', DB::table('user_picks')->where([['user_id', $user->id],['game_scored','1'],['week_number', $setting->week_number]])->count())

            ->with('seasonpoints', DB::table('season_points_view')->orderBy('total', 'desc')->take(10)->get())
            ->with('weekpoints', DB::table('week_points_view')->where('week_number', $setting->week_number)->orderBy('total', 'desc')->take(10)->get())
            ->with('weekmax', DB::table('week_points_view')->where('week_number', $setting->week_number)->max('total'))
            ->with('seasonmax', DB::table('season_points_view')->max('total'))
            ;
    }
    public function single($id)
    {
        $post = Post::find($id);
        return view('singlepost')->with('post', $post)
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::where('menu_bar', 1)->get())
            ->with('first_post', Post::orderBy('created_at', 'dec')->first())
            ->with('second_post', Post::orderBy('created_at', 'dec')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'dec')->skip(2)->take(1)->get()->first())
            ->with('settings', Setting::first())
            ->with('categories_list', Category::all())
            ->with('posts_all', Post::orderBy('created_at', 'dec')->get())
            ->with('tags', Tag::all())
            ->with('profile', Profile::first())
            ->with('user', User::first());

    }
}
