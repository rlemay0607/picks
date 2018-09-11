@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-md-12">
                <div class="sidebar  boxed  push-down-30">
                    <div class="row">
                        <div class="col-xs-10  col-xs-offset-1">
                        </br>
                            <form action="{{ route('finances') }}" method="get" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div >
                                        <button class="btn btn-lg btn-primary" type="submit">
                                            Return To Finance Dashboard
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <table class="table" >
                                <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paid_full as $paid_full)
                                    <tr>
                                        <td>{{$paid_full->team_name}}</td>
                                        <td>{{$paid_full->name}}</td>
                                        <td>{{$paid_full->email}}</td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    @stop