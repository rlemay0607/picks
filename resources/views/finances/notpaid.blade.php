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
                                    <th>User Name</th>
                                    <th>Outstanding Money</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($not_paid as $not_paid)
                                    <tr>
                                        <td>{{$not_paid->name}}</td>
                                        <td>{{110 - $not_paid->total_paid}}</td>
                                        <td>
                                            <a href="{{ route('finances.payment.full',['id' => $not_paid->id]) }}" class="btn btn-xs btn-success">
                                                        Pay In Full
                                            </a>
                                            <a href="{{ route('finances.payment.5',['id' => $not_paid->id]) }}" class="btn btn-xs btn-success">
                                                $5
                                            </a>
                                            <a href="{{ route('finances.payment.10',['id' => $not_paid->id]) }}" class="btn btn-xs btn-success">
                                                $10
                                            </a>
                                            <a href="{{ route('finances.payment.20',['id' => $not_paid->id]) }}" class="btn btn-xs btn-success">
                                                $20
                                            </a>
                                            <a href="{{ route('finances.payment.50',['id' => $not_paid->id]) }}" class="btn btn-xs btn-success">
                                                $50
                                            </a>


                                        </td>

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