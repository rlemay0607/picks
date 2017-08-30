<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;

class UsersController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         return view('admin.users.index')->with('users', User::all());
     }

    public function profile()
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
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
            'email' => 'required|email'
        ]);
        $user = User::create([
           'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password')
        ]);

        $profile = Profile::create([
           'user_id' => $user->id,
            'avatar' => 'uploads/avatars/default.png'
        ]);
        Session::flash('success', 'User created');
        return redirect()->route('users');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function adminupdate(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'team_name' => 'required',
            'options' => 'required',



        ]);

        $user =User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->team_name = $request->team_name;
        $user->options = $request->options;
        $user->avatar= $request->team;
        $user->total_paid = $request->paid;
        $user->active = $request->active;
        $user->week_created = $request->week_created;



        $user->save();


        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
            $user->save();
        }


        return redirect()->route('users');
    }
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
            $user = User::find($id);
            return view('admin.users.edit')->with('user', $user);
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
        $user = User::find($id);
        $user->delete();

        Session::flash('success', 'User has been deleted');
        return redirect()->back();
    }
    public function admin($id)
    {
        $user = User::find($id);
        $user->admin = 1;
        $user->save();
        Session::flash('success', 'User is now admin');
        return redirect()->back();

    }
    public function not_admin($id)
    {
        $user = User::find($id);
        $user->admin = 0;
        $user->save();
        Session::flash('success', 'User is removed as an admin');
        return redirect()->back();

    }


}
