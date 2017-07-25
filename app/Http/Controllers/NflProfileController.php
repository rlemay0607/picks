<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NflProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nfl.profile')->with('user', Auth::user());
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
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'team_name' => 'required|unique:users',
            'phone' => 'required',
            'options' => 'required',
        ]);

        $user = Auth::user();

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;
            $avatar_new_name = time(). $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatar_new_name);
            $user->profile->avatar = 'uploads/avatars/' . $avatar_new_name;
            $user->profile->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->team_name = $request->team_name;
        $user->phone = $request->phone;
        $user->options = $request->options;

        $user->save();


        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success', 'Account profile updated');
        return redirect()->back();
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
