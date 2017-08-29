<div class="col-xs-12  col-md-4">

    <!-- Widget author -->
    <div class="widget-author  boxed  push-down-30">
        <div class="widget-author__image-container">
            <div class="widget-author__avatar--blurred">
                <img src="{{ asset(Auth::user()->avatar) }}" alt="Avatar image" width="90" height="90">
            </div>
            <img class="widget-author__avatar" src="{{ asset(Auth::user()->avatar) }}" alt="Avatar image" width="90" height="90">
        </div>
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1">
                <br>
                <h4>{{ Auth::user()->team_name }}</h4>
                @if(Auth::user()->total_paid<'110')
                    <b><font color="red">Out Standing Balance {{110-Auth::user()->total_paid}}</font> <a href="{{route('about')}}">
                            <span class="glyphicon glyphicon-question-sign"></span>
                        </a></b>
                    @else
                    <b><font color="green">Paid in Full</font></b>
                @endif

                <p align="left">{{ Auth::user() -> name}}<br>
                {{ Auth::user() -> email}}<br>
                {{ Auth::user() -> phone}}<br>
                @if (Auth::user()-> options=='f')
                        Favorite
                    @elseif (Auth::user()-> options=='u')
                        Underdog
                @else
                    Random
                @endif
                </br>
                </br>
                       <font color="gray">Picks Accuracy</font></br>
                    Season: @if($seasontotal >0) {{number_format($seasoncorrect / $seasontotal * 100, 2)}}%@endif</br>
                        Week:  @if ($weektotal >0) {{number_format($weekcorrect / $weektotal * 100, 2)}}%@endif</br>

                </p>
                <form action="{{ route('user.profile') }}" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>



                <br>


            </div>
        </div>
    </div>
    <div class="widget-author  boxed  push-down-30">
    <div class="row">

        <div class="col-xs-10  col-xs-offset-1">
            <div class="text-center">
                <h4>My Picks</h4>
            </div>
            <table class="table table">
                <thead>
                <tr align="center">
                    <th>Week #</th>
                    <th>Points</th>
                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                <tr bgcolor="#FF0000" align="center">
                    <td><font color="white">Total</font></td>
                    <td><font color="white">{{$totalpoints}}</font></td>
                    <td></td>
                </tr>
                <tr align="center">
                @if($settings->week_number>='21')
                    <td>Super Bowl</td>
                    <td>{{$week21}}</td>
                        <td>
                            <a href="{{ route('week21.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='20')
                    <td>Championship</td>
                    <td>{{$week20}}</td>
                        <td>
                            <a href="{{ route('week20.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='19')
                    <td>Divisional</td>
                    <td>{{$week19}}</td>
                        <td>
                            <a href="{{ route('week19.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='18')
                    <td>Wildcard</td>
                    <td>{{$week18}}</td>
                        <td>
                            <a href="{{ route('week18.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='17')
                    <td>17</td>
                    <td>{{$week17}}</td>
                        <td>
                            <a href="{{ route('week17.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='16')
                    <td>16</td>
                    <td>{{$week16}}</td>
                        <td>
                            <a href="{{ route('week16.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='15')
                    <td>15</td>
                    <td>{{$week15}}</td>
                        <td>
                            <a href="{{ route('week15.pick') }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='14')
                    <td>14</td>
                    <td>{{$week14}}</td>
                    <td>
                        <a href="{{ route('week14.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                @if($settings->week_number>='13')
                    <td>13</td>
                    <td>{{$week13}}</td>
                    <td>
                        <a href="{{ route('week13.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='12')
                    <td>12</td>
                    <td>{{$week12}}</td>
                    <td>
                        <a href="{{ route('week12.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='11')
                    <td>11</td>
                    <td>{{$week11}}</td>
                    <td>
                        <a href="{{ route('week11.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='10')
                    <td>10</td>
                    <td>{{$week10}}</td>
                    <td>
                        <a href="{{ route('week10.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='9')
                    <td>9</td>
                    <td>{{$week9}}</td>
                    <td>
                        <a href="{{ route('week9.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='8')
                    <td>8</td>
                    <td>{{$week8}}</td>
                    <td>
                        <a href="{{ route('week8.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='7')
                    <td>7</td>
                    <td>{{$week7}}</td>
                    <td>
                        <a href="{{ route('week7.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='6')
                    <td>6</td>
                    <td>{{$week6}}</td>
                    <td>
                        <a href="{{ route('week6.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='5')
                    <td>5</td>
                    <td>{{$week5}}</td>
                    <td>
                        <a href="{{ route('week5.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='4')
                    <td>4</td>
                    <td>{{$week4}}</td>
                    <td>
                        <a href="{{ route('week4.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='3')
                    <td>3</td>
                    <td>{{$week3}}</td>
                    <td>
                        <a href="{{ route('week3.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='2')
                    <td>2</td>
                    <td>{{$week2}}</td>
                    <td>
                        <a href="{{ route('week2.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif
                </tr>
                <tr align="center">
                    @if($settings->week_number>='1')
                        <td>1</td>
                    <td>{{$week1}}</td>
                        <td>
                        <a href="{{ route('week1.pick') }}" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    @endif

                </tr>

                </tbody>
            </table>

        </div>
    </div>
    </div>

</div>
