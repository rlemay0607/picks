<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FinancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('finances.index')
            ->with('settings', Setting::first())
            ->with('total_collected', DB::table('users')->sum('total_paid'))
            ->with('total_users', DB::table('users')->count())
            ->with('paid_full', DB::table('users')->where('total_paid', '110')->count());
    }
    public function paidinfull()
{
    return view('finances.paidinfull')
        ->with('paid_full', DB::table('users')->where('total_paid', '110')->get());
}

    public function notpaid()
    {
        return view('finances.notpaid')
            ->with('not_paid', DB::table('users')->where('total_paid', '<', '110')->get());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function payment_full($id)
    {
        $paid = User::find($id);
        $paid->total_paid = '110';
        $paid->save();
        return redirect()->back();

    }
    public function payment_5( $id)
    {
        $paid = User::find($id);
        $paid->total_paid = $paid->total_paid + '5';
        $paid->save();
        return redirect()->back();

    }
    public function payment_10( $id)
    {
        $paid = User::find($id);
        $paid->total_paid = $paid->total_paid + '10';
        $paid->save();
        return redirect()->back();

    }
    public function payment_20( $id)
    {
        $paid = User::find($id);
        $paid->total_paid = $paid->total_paid + '20';
        $paid->save();
        return redirect()->back();

    }
    public function payment_50( $id)
    {
        $paid = User::find($id);
        $paid->total_paid = $paid->total_paid + '50';
        $paid->save();
        return redirect()->back();

    }
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
