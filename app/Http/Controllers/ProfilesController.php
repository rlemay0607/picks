<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nfl.profile');
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'team_name' => 'required',
            'options' => 'required',
            'paid' => 'required',


        ]);

        $user = Auth::user();

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;
            $avatar_new_name = time(). $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatar_new_name);
            $user->avatar = 'uploads/avatars/' . $avatar_new_name;
            $user->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->team_name = $request->team_name;
        $user->options = $request->options;
        $user->avatar= $request->team;
        $user->total_paid = $request->paid;

        $user->save();


        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success', 'Account profile updated');
        return view('index');
    }


    public function edit(Request $request)
    {

    }

    public function updateadmin(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'team_name' => 'required',
            'options' => 'required',
            'paid' => 'required',


        ]);

        $user = Auth::user();

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;
            $avatar_new_name = time(). $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatar_new_name);
            $user->avatar = 'uploads/avatars/' . $avatar_new_name;
            $user->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->team_name = $request->team_name;
        $user->options = $request->options;
        $user->avatar= $request->team;
        $user->total_paid = $request->paid;

        $user->save();


        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success', 'Account profile updated');
        return view('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
