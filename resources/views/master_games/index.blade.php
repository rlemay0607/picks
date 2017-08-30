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
    <div class="row">
        <div class="col-xs-12  col-md-12">
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <h3>The current week is set to <b><font color="red"> week {{ $week->week_number}}</b></font>. Any new picks will be enter for the this week. If you need to change the current week please adjust the week in the settings section.
                            </br></h3>
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
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Favorit</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="favorit">
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
                                    <option value="29.">29.5</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Underdog</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="underdog">
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
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{$game->week_number}}</td>
                                    <td>@if($game->winner == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif{{ $game->favorit }} <font color="red"> <b>-{{$game->spread}}</b></font></td>
                                    <td>@if($game->winner == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif {{ $game->underdog }} <font color="green"> <b>+{{$game->spread}}</b></font></td>
                                    <td>@if($game->scored =='0')
                                        @if($game->locked !='1') <a href="{{ route('game.edit',['id' => $game->id]) }}" class="btn btn-xs btn-info">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    @endif
                                        @if($game->locked !='1')
                                        <a href="{{ route('game.lock',['id' => $game->id]) }}" class="btn btn-xs btn-success">
                                            <span class="glyphicon glyphicon-check"></span>
                                        </a>
                                        @endif
                                        @if($game->locked =='1')
                                        <a href="{{ route('game.unlock',['id' => $game->id]) }}" class="btn btn-xs btn-success">
                                            <span class="glyphicon glyphicon-unchecked"></span>
                                        </a>
                                        @endif
                                        @if($game->locked !='1')
                                        <a href="{{ route('game.delete',['id' => $game->id]) }}" class="btn btn-xs btn-danger">
                                            <span class="glyphicon glyphicon-remove-sign"></span>
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

