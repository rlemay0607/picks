@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-md-12">
                <div class="sidebar  boxed  push-down-30">
                    <div class="row">
                        <div class="col-xs-10  col-xs-offset-1" align="center">
                            <h1>FINANCES REPORT</h1>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xs-1" >

                            </div>

                            <div class="col-xs-5" >
                                <div class="thumbnail title title-medium title-blue" style="background-color: #00cc66" align="center" >
                                    <h4> <b><font color="white"> Amount Collected</font></b> </h4>
                                    <h4> <b><font color="white">${{$total_collected}}</font></b> </h4>

                                </div>
                            </div>


                            <div class="col-xs-5" >
                                    <div class="thumbnail title title-medium title-blue" style="background-color: red" align="center" >
                                        <h4> <b><font color="white"> Amount Remaining</font></b> </h4>
                                        <h4> <b><font color="white">${{($total_users * 110)-$total_collected}}</font></b> </h4>

                                    </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-1" >

                        </div>

                        <div class="col-xs-5" >
                            <div class="thumbnail title title-medium title-blue" style="background-color: #00cc66" align="center" >
                                <h4> <b><font color="white"> Season Ending Money</font></b> </h4>
                                <h4> <b><font color="white">${{($total_users * $settings->week_number)*2}}</font></b> </h4>

                            </div>
                        </div>


                        <div class="col-xs-5" >
                            <div class="thumbnail title title-medium title-blue" style="background-color: #00cc66" align="center" >
                                <h4> <b><font color="white"> Admin Money</font></b> </h4>
                                <h4> <b><font color="white">${{($total_users * $settings->week_number)}}</font></b> </h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" >

                        </div>

                        <div class="col-xs-5" >
                            <div class="thumbnail title title-medium title-blue" style="background-color: #00cc66" align="center" >
                                <h4> <b><font color="white"> Number of users paid in full</font></b> </h4>
                                <h4> <b><font color="white">{{$paid_full}}</font></b> </h4>
                                <form action="{{ route('finances.paidinfull') }}" method="get" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <button class="btn btn-sm  btn-primary" type="submit">
                                                View List
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-xs-5" >
                            <div class="thumbnail title title-medium title-blue" style="background-color: red" align="center" >
                                <h4> <b><font color="white"> Number of users unpaid</font></b> </h4>
                                <h4> <b><font color="white">{{$total_users - $paid_full}}</font></b> </h4>
                                <form action="{{ route('finances.notpaid') }}" method="get" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <button class="btn btn-sm  btn-primary" type="submit">
                                                View List
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop