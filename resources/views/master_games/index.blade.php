<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>NFL Weekly Picks</title>

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="/stylesheets/3eba4af4.main.css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,700:latin', 'Lato:700,900:latin']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
</head>
<body>

@include('layouts.app')
@include('admin.includes.error')
<div class="container">
    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12  col-md-12">
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <h3>The current week is set to <b><font color="red"> week {{ $week->week_number}}</font></b>. Any new picks will be enter for the this week. If you need to change the current week please adjust the week in the settings section.
                            </h3>
                        </br>
                        <h4>
                        If the game is locked the system will not allow you to edit it or delete the record.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <h4><b>Create a Pick</b></h4>


                        <form action="{{ route('master.game.create') }}" method="post" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="playoff_name">Playoff Name</label>
                                <input type="text" name="playoff_name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="game_type">Game Type</label>
                                <input type="text" name="game_type"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Favorit</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="favorit">
                                    <option value="Heads">Heads</option>
                                    <option value="Over">Over</option>
                                    <option value="Arizona Cardinals">Arizona Cardinals</option>
                                    <option value="Atlanata Falcon">Atlanata Falcons</option>
                                    <option value="Baltimore Ravens">Baltimore Ravens</option>
                                    <option value="Buffalo Bills">Buffalo Bills</option>
                                    <option value="Carolina Panthers">Carolina Panthers</option>
                                    <option value="Chicago Bears">Chicago Bears</option>
                                    <option value="Cincinnati Bengals">Cincinnati Bengals</option>
                                    <option value="Cleveland Browns">Cleveland Browns</option>
                                    <option value="Dallas Cowboys">Dallas Cowboys</option>
                                    <option value="Denver Broncos">Denver Broncos</option>
                                    <option value="Detroit Lions">Detroit Lions</option>
                                    <option value="Greenbay Packers">Greenbay Packers</option>
                                    <option value="Houston Texans">Houston Texans</option>
                                    <option value="Indianapolis Colts">Indianapolis Colts</option>
                                    <option value="Jacksonville Jaguars">Jacksonville Jaguars</option>
                                    <option value="Kansas City Chiefs">Kansas City Chiefs</option>
                                    <option value="Los Angeles Chargers">Los Angeles Chargers</option>
                                    <option value="Los Angeles Rams">Los Angeles Rams</option>
                                    <option value="Miami Dolphins">Miami Dolphins</option>
                                    <option value="Minnesota Vikings">Minnesota Vikings</option>
                                    <option value="New England Patirots">New England Patirots</option>
                                    <option value="New Orleans Saints">New Orleans Saints</option>
                                    <option value="New York Giants">New York Giants</option>
                                    <option value="New York Jets">New York Jets</option>
                                    <option value="Oakland Raiders">Oakland Raiders</option>
                                    <option value="Philadelphia Eagles">Philadelphia Eagles</option>
                                    <option value="Pittsburg Steelers">Pittsburg Steelers</option>
                                    <option value="San Francisco 49ers">San Francisco 49ers</option>
                                    <option value="Seattle Seahawks">Seattle Seahawks</option>
                                    <option value="Tampa Bay Buccaneers">Tampa Bay Buccaneers</option>
                                    <option value="Tennessee Titans">Tennessee Titans</option>
                                    <option value="Washington Redskins">Washington Redskins</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Spread</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="spread">
                                   <option value="0">None</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.5">5.5</option>
                                    <option value="6.5">6.5</option>
                                    <option value="7.5">7.5</option>
                                    <option value="8.5">8.5</option>
                                    <option value="9.5">9.5</option>
                                    <option value="10.5">10.5</option>
                                    <option value="11.5">11.5</option>
                                    <option value="12.5">12.5</option>
                                    <option value="13.5">13.5</option>
                                    <option value="14.5">14.5</option>
                                    <option value="15.5">15.5</option>
                                    <option value="16.5">16.5</option>
                                    <option value="17.5">17.5</option>
                                    <option value="18.5">18.5</option>
                                    <option value="19.5">19.5</option>
                                    <option value="20.5">20.5</option>
                                    <option value="21.5">21.5</option>
                                    <option value="22.5">22.5</option>
                                    <option value="23.5">23.5</option>
                                    <option value="24.5">24.5</option>
                                    <option value="25.5">25.5</option>
                                    <option value="26.5">26.5</option>
                                    <option value="27.5">27.5</option>
                                    <option value="28.5">28.5</option>
                                    <option value="29.5">29.5</option>
                                    <option value="30.5">30.5</option>
                                    <option value="31.5">31.5</option>
                                    <option value="32.5">32.5</option>
                                    <option value="33.5">33.5</option>
                                    <option value="34.5">34.5</option>
                                    <option value="35.5">35.5</option>
                                    <option value="36.5">36.5</option>
                                    <option value="37.5">37.5</option>
                                    <option value="38.5">38.5</option>
                                    <option value="39.5">39.5</option>
                                    <option value="40.5">40.5</option>
                                    <option value="41.5">41.5</option>
                                    <option value="42.5">42.5</option>
                                    <option value="43.5">43.5</option>
                                    <option value="44.5">44.5</option>
                                    <option value="45.5">45.5</option>
                                    <option value="46.5">46.5</option>
                                    <option value="47.5">47.5</option>
                                    <option value="48.5">48.5</option>
                                    <option value="49.5">49.5</option>
                                    <option value="50.5">50.5</option>
                                    <option value="51.5">51.5</option>
                                    <option value="52.5">52.5</option>
                                    <option value="53.5">53.5</option>
                                    <option value="54.5">54.5</option>
                                    <option value="55.5">55.5</option>
                                    <option value="56.5">56.5</option>
                                    <option value="57.5">57.5</option>
                                    <option value="58.5">58.5</option>
                                    <option value="59.5">59.5</option>
                                    <option value="60.5">60.5</option>
                                    <option value="61.5">61.5</option>
                                    <option value="62.5">62.5</option>
                                    <option value="63.5">63.5</option>
                                    <option value="64.5">64.5</option>
                                    <option value="65.5">65.5</option>
                                    <option value="66.5">66.5</option>
                                    <option value="67.5">67.5</option>
                                    <option value="68.5">68.5</option>
                                    <option value="69.5">69.5</option>
                                    <option value="70.5">70.5</option>
                                    <option value="71.5">71.5</option>
                                    <option value="72.5">72.5</option>
                                    <option value="73.5">73.5</option>
                                    <option value="74.5">74.5</option>
                                    <option value="75.5">75.5</option>
                                    <option value="76.5">76.5</option>
                                    <option value="77.5">77.5</option>
                                    <option value="78.5">78.5</option>
                                    <option value="79.5">79.5</option>
                                    <option value="80.5">80.5</option>
                                    <option value="81.5">81.5</option>
                                    <option value="82.5">82.5</option>
                                    <option value="83.5">83.5</option>
                                    <option value="84.5">84.5</option>
                                    <option value="85.5">85.5</option>
                                    <option value="86.5">86.5</option>
                                    <option value="87.5">87.5</option>
                                    <option value="88.5">88.5</option>
                                    <option value="89.5">89.5</option>
                                    <option value="90.5">90.5</option>
                                    <option value="91.5">91.5</option>
                                    <option value="92.5">92.5</option>
                                    <option value="93.5">93.5</option>
                                    <option value="94.5">94.5</option>
                                    <option value="95.5">95.5</option>
                                    <option value="96.5">96.5</option>
                                    <option value="97.5">97.5</option>
                                    <option value="98.5">98.5</option>
                                    <option value="99.5">99.5</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Underdog</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="underdog">
                                    <option value="Tails">Tails</option>
                                    <option value="Under">Under</option>
                                    <option value="Arizona Cardinals">Arizona Cardinals</option>
                                    <option value="Atlanata Falcon">Atlanata Falcons</option>
                                    <option value="Baltimore Ravens">Baltimore Ravens</option>
                                    <option value="Buffalo Bills">Buffalo Bills</option>
                                    <option value="Carolina Panthers">Carolina Panthers</option>
                                    <option value="Chicago Bears">Chicago Bears</option>
                                    <option value="Cincinnati Bengals">Cincinnati Bengals</option>
                                    <option value="Cleveland Browns">Cleveland Browns</option>
                                    <option value="Dallas Cowboys">Dallas Cowboys</option>
                                    <option value="Denver Broncos">Denver Broncos</option>
                                    <option value="Detroit Lions">Detroit Lions</option>
                                    <option value="Greenbay Packers">Greenbay Packers</option>
                                    <option value="Houston Texans">Houston Texans</option>
                                    <option value="Indianapolis Colts">Indianapolis Colts</option>
                                    <option value="Jacksonville Jaguars">Jacksonville Jaguars</option>
                                    <option value="Kansas City Chiefs">Kansas City Chiefs</option>
                                    <option value="Los Angeles Chargers">Los Angeles Chargers</option>
                                    <option value="Los Angeles Rams">Los Angeles Rams</option>
                                    <option value="Miami Dolphins">Miami Dolphins</option>
                                    <option value="Minnesota Vikings">Minnesota Vikings</option>
                                    <option value="New England Patirots">New England Patirots</option>
                                    <option value="New Orleans Saints">New Orleans Saints</option>
                                    <option value="New York Giants">New York Giants</option>
                                    <option value="New York Jets">New York Jets</option>
                                    <option value="Oakland Raiders">Oakland Raiders</option>
                                    <option value="Philadelphia Eagles">Philadelphia Eagles</option>
                                    <option value="Pittsburg Steelers">Pittsburg Steelers</option>
                                    <option value="San Francisco 49ers">San Francisco 49ers</option>
                                    <option value="Seattle Seahawks">Seattle Seahawks</option>
                                    <option value="Tampa Bay Buccaneers">Tampa Bay Buccaneers</option>
                                    <option value="Tennessee Titans">Tennessee Titans</option>
                                    <option value="Washington Redskins">Washington Redskins</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Home Team</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="home_team">
                                    <option value="f">Favorit</option>
                                    <option value="u">Underdog</option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Game Time</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="game_time">


                                    <option value="saturday_early">Saturday Early Game</option>
                                    <option value="saturday_late">Saturday Late Game</option>
                                    <option value="saturday_night">Saturday Night Game</option>
                                    <option value="sunday_morning">Sunday Morning Game</option>
                                    <option value="sunday_early">Sunday Early Game</option>
                                    <option value="sunday_late">Sunday Late Game</option>
                                    <option value="sunday_night">Sunday Night Game</option>
                                    <option value="monday_night">Monday Night Game</option>
                                    <option value="super_bowl">Super Bowl</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-xs btn-success" type="submit">
                                    Create Pick
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        Key: <span class="glyphicon glyphicon-pencil"></span> Edit Record <span class="glyphicon glyphicon-check"></span> Lock Picks <span class="glyphicon glyphicon-unchecked"></span> Unlock Picks <span class="glyphicon glyphicon-remove-sign"></span> Delete Pick <span class="glyphicon glyphicon-edit"></span> Score Game
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Week</th>
                                <th>Favorit</th>
                                <th>Underdog</th>
                                <th>Playoff Name</th>
                                <th>Time</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{$game->week_number}}</td>
                                    <td>@if($game->winner == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($game->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $game->favorit }} @if($game->favorit =='Over')<b>{{$game->spread}}</b>@endif @if($game->favorit !='Over')<font color="red"> <b>-{{$game->spread}}</b></font>@endif</td>
                                    <td>@if($game->winner == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($game->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $game->underdog }} @if($game->underdog == 'Under') <b>{{$game->spread}}</b>@endif @if($game->underdog !='Under')<font color="green"> <b>+{{$game->spread}}</b></font>@endif</td>
                                    <td>{{$game->playoff_name}}</td>
                                    <td>{{$game->game_time}}</td>
                                    <td>@if($game->scored =='0')
                                        <a href="{{ route('game.edit',['id' => $game->id]) }}" class="btn btn-xs btn-info">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>


                                        @if($game->locked !='1')
                                        <a href="{{ route('game.delete',['id' => $game->id]) }}" class="btn btn-xs btn-danger">
                                            <span class="glyphicon glyphicon-remove-sign"></span>
                                        </a>
                                                <a href="{{ route('game.lock',['id' => $game->id]) }}" class="btn btn-xs btn-info">
                                                    <span class="glyphicon glyphicon-lock"></span>
                                                </a>
                                            @endif
                                        @if($game->locked =='1')
                                            <a href="{{ route('game.score',['id' => $game->id]) }}" class="btn btn-xs btn-warning">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                        @endif
                                            @endif
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
@include('includes.footer')
</body>
</html>

