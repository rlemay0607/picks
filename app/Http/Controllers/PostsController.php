<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        if($categories->count()==0 || $tags->count() == 0)
        {
            Session::flash('info', 'You must have some categories and tags defined before creating a post');
            return redirect()->back();
        }
        return view('admin.posts.create')->with('categories', $categories)
                                        ->with('tags', $tags);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
           'title'=> 'required',
            'featured' => 'required|image',
            'details' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            'short_description' => 'required',
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([
            'title' => $request->title,
            'details' => $request->details,
            'featured' => 'uploads/posts/'. $featured_new_name,
            'category_id' => $request->category_id,
            'slug' =>str_slug($request->title),
            'short_description' => $request->short_description,
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success', 'You succesfully created a post');
        return redirect()->route('home');

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
        $post = Post::find($id);
        return view('admin.posts.edit')->with('post', $post)->with('categories', Category::all())
            ->with('tags', Tag::all());
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
        $this->validate($request, [
            'title' =>'required',
            'details' => 'required',
            'category_id' => 'required',
            'short_description' =>'required'
            ]);
        $post =Post::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts', $featured_new_name);
            $post->featured = 'uploads/posts/'.$featured_new_name;
        }
        $post->title = $request->title;
        $post->details = $request->details;
        $post->category_id = $request->category_id;
        $post->short_description = $request->short_description;

        $post->save();
        $post->tags()->sync($request->tags);
        Session::flash('success', 'Post updated');
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The post was just trashed');
        return redirect()->back();
    }
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trashed')->with('posts', $posts);
    }
    public function kill($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        Session::flash('success', 'Post have been deleted permanently');
        return redirect()->back();
    }
    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success', 'Post have been restored');
        return redirect()->route('posts');
    }
}
