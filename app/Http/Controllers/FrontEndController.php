<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Profile;
use App\Setting;
use App\Tag;
use App\User;


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
        return view('index')
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
            ->with('user', User::first()->skip(1)->take(1)->get()->first());
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
