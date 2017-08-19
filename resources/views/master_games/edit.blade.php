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
                        <form action="{{ route('game.update', ['id'=>$game->id]) }}" method="post" >
                            {{csrf_field()}}
                        </br>

                            <div class="form-group">

                                <label class="mr-sm-2" for="inlineFormCustomSelect">Favorit</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="favorit">
                                    <option value="Arizona Cardinals" @if ($game->favorit=='Arizona Cardinals') selected @endif>Arizona Cardinals</option>
                                    <option value="Atlanata Falcon"@if ($game->favorit=='Atlanata Falcon') selected @endif>Atlanata Falcons</option>
                                    <option value="Baltimore Ravens"@if ($game->favorit=='Baltimore Ravens') selected @endif>Baltimore Ravens</option>
                                    <option value="Buffalo Bills"@if ($game->favorit=='Buffalo Bills') selected @endif>Buffalo Bills</option>
                                    <option value="Carolina Panthers"@if ($game->favorit=='Carolina Panthers') selected @endif>Carolina Panthers</option>
                                    <option value="Chicago Bears"@if ($game->favorit=='Chicago Bears') selected @endif>Chicago Bears</option>
                                    <option value="Cincinnati Bengals"@if ($game->favorit=='Cincinnati Bengals') selected @endif>Cincinnati Bengals</option>
                                    <option value="Cleveland Browns"@if ($game->favorit=='Cleveland Brown') selected @endif>Cleveland Browns</option>
                                    <option value="Dallas Cowboys"@if ($game->favorit=='Dallas Cowboys') selected @endif>Dallas Cowboys</option>
                                    <option value="Denver Broncos"@if ($game->favorit=='Denver Broncos') selected @endif>Denver Broncos</option>
                                    <option value="Detroit Lions"@if ($game->favorit=='Detroit Lions') selected @endif>Detroit Lions</option>
                                    <option value="Greenbay Packers"@if ($game->favorit=='Greenbay Packers') selected @endif>Greenbay Packers</option>
                                    <option value="Houston Texans"@if ($game->favorit=='Houston Texans') selected @endif>Houston Texans</option>
                                    <option value="Indianapolis Colts"@if ($game->favorit=='Indianapolis Colts') selected @endif>Indianapolis Colts</option>
                                    <option value="Jacksonville Jaguars"@if ($game->favorit=='Jacksonville Jaguars') selected @endif>Jacksonville Jaguars</option>
                                    <option value="Kansas City Chiefs"@if ($game->favorit=='Kansas City Chiefs') selected @endif>Kansas City Chiefs</option>
                                    <option value="Los Angeles Chargers"@if ($game->favorit=='Los Angeles Chargers') selected @endif>Los Angeles Chargers</option>
                                    <option value="Los Angeles Rams"@if ($game->favorit=='Los Angeles Rams') selected @endif>Los Angeles Rams</option>
                                    <option value="Miami Dolphins"@if ($game->favorit=='Miami Dolphins') selected @endif>Miami Dolphins</option>
                                    <option value="Minnesota Vikings"@if ($game->favorit=='Minnesota Vikings') selected @endif>Minnesota Vikings</option>
                                    <option value="New England Patirots"@if ($game->favorit=='New England Patirots') selected @endif>New England Patirots</option>
                                    <option value="New Orleans Saints"@if ($game->favorit=='New Orleans Saints') selected @endif>New Orleans Saints</option>
                                    <option value="New York Giants"@if ($game->favorit=='New York Giants') selected @endif>New York Giants</option>
                                    <option value="New York Jets"@if ($game->favorit=='New York Jets') selected @endif>New York Jets</option>
                                    <option value="Oakland Raiders"@if ($game->favorit=='Oakland Raiders') selected @endif>Oakland Raiders</option>
                                    <option value="Philadelphia Eagles"@if ($game->favorit=='Philadelphia Eagles') selected @endif>Philadelphia Eagles</option>
                                    <option value="Pittsburg Steelers"@if ($game->favorit=='Pittsburg Steelers') selected @endif>Pittsburg Steelers</option>
                                    <option value="San Francisco 49ers"@if ($game->favorit=='San Francisco 49ers') selected @endif>San Francisco 49ers</option>
                                    <option value="Seattle Seahawks"@if ($game->favorit=='Seattle Seahawks') selected @endif>Seattle Seahawks</option>
                                    <option value="Tampa Bay Buccaneers"@if ($game->favorit=='Tampa Bay Buccaneers') selected @endif>Tampa Bay Buccaneers</option>
                                    <option value="Tennessee Titans"@if ($game->favorit=='Tennessee Titans') selected @endif>Tennessee Titans</option>
                                    <option value="Washington Redskins"@if ($game->favorit=='Washington Redskins') selected @endif>Washington Redskins</option>

                                </select>
                            </div>
                            <div class="form-group">

                                <label class="mr-sm-2" for="inlineFormCustomSelect">Spread</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="spread">
                                    <option value="0.5"@if ($game->spread=='0.5') selected @endif>{{$game->spread}}</option>
                                    <option value="1.5"@if ($game->spread=='1.5') selected @endif>1.5</option>
                                    <option value="2.5"@if ($game->spread=='2.5') selected @endif>2.5</option>
                                    <option value="3.5"@if ($game->spread=='3.5') selected @endif>3.5</option>
                                    <option value="4.5"@if ($game->spread=='4.5') selected @endif>4.5</option>
                                    <option value="5.5"@if ($game->spread=='5.5') selected @endif>5.5</option>
                                    <option value="6.5"@if ($game->spread=='6.5') selected @endif>6.5</option>
                                    <option value="7.5"@if ($game->spread=='7.5') selected @endif>7.5</option>
                                    <option value="8.5"@if ($game->spread=='8.5') selected @endif>8.5</option>
                                    <option value="9.5"@if ($game->spread=='9.5') selected @endif>9.5</option>
                                    <option value="10.5"@if ($game->spread=='10.5') selected @endif>10.5</option>
                                    <option value="11.5"@if ($game->spread=='11.5') selected @endif>11.5</option>
                                    <option value="12.5"@if ($game->spread=='12.5') selected @endif>12.5</option>
                                    <option value="13.5"@if ($game->spread=='13.5') selected @endif>13.5</option>
                                    <option value="14.5"@if ($game->spread=='14.5') selected @endif>14.5</option>
                                    <option value="15.5"@if ($game->spread=='15.5') selected @endif>15.5</option>
                                    <option value="16.5"@if ($game->spread=='16.5') selected @endif>16.5</option>
                                    <option value="17.5"@if ($game->spread=='17.5') selected @endif>17.5</option>
                                    <option value="18.5"@if ($game->spread=='18.5') selected @endif>18.5</option>
                                    <option value="19.5"@if ($game->spread=='19.5') selected @endif>19.5</option>
                                    <option value="20.5"@if ($game->spread=='20.5') selected @endif>20.5</option>
                                    <option value="21.5"@if ($game->spread=='21.5') selected @endif>21.5</option>
                                    <option value="22.5"@if ($game->spread=='22.5') selected @endif>22.5</option>
                                    <option value="23.5"@if ($game->spread=='23.5') selected @endif>23.5</option>
                                    <option value="24.5"@if ($game->spread=='24.5') selected @endif>24.5</option>
                                    <option value="25.5"@if ($game->spread=='25.5') selected @endif>25.5</option>
                                    <option value="26.5"@if ($game->spread=='26.5') selected @endif>26.5</option>
                                    <option value="27.5"@if ($game->spread=='27.5') selected @endif>27.5</option>
                                    <option value="28.5"@if ($game->spread=='28.5') selected @endif>28.5</option>
                                    <option value="29.5"@if ($game->spread=='29.5') selected @endif>29.5</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Underdog</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="underdog">
                                    <option value="Arizona Cardinals" @if ($game->underdog=='Arizona Cardinals') selected @endif>Arizona Cardinals</option>
                                    <option value="Atlanata Falcon"@if ($game->underdog=='Atlanata Falcon') selected @endif>Atlanata Falcons</option>
                                    <option value="Baltimore Ravens"@if ($game->underdog=='Baltimore Ravens') selected @endif>Baltimore Ravens</option>
                                    <option value="Buffalo Bills"@if ($game->underdog=='Buffalo Bills') selected @endif>Buffalo Bills</option>
                                    <option value="Carolina Panthers"@if ($game->underdog=='Carolina Panthers') selected @endif>Carolina Panthers</option>
                                    <option value="Chicago Bears"@if ($game->underdog=='Chicago Bears') selected @endif>Chicago Bears</option>
                                    <option value="Cincinnati Bengals"@if ($game->underdog=='Cincinnati Bengals') selected @endif>Cincinnati Bengals</option>
                                    <option value="Cleveland Browns"@if ($game->underdog=='Cleveland Brown') selected @endif>Cleveland Browns</option>
                                    <option value="Dallas Cowboys"@if ($game->underdog=='Dallas Cowboys') selected @endif>Dallas Cowboys</option>
                                    <option value="Denver Broncos"@if ($game->underdog=='Denver Broncos') selected @endif>Denver Broncos</option>
                                    <option value="Detroit Lions"@if ($game->underdog=='Detroit Lions') selected @endif>Detroit Lions</option>
                                    <option value="Greenbay Packers"@if ($game->underdog=='Greenbay Packers') selected @endif>Greenbay Packers</option>
                                    <option value="Houston Texans"@if ($game->underdog=='Houston Texans') selected @endif>Houston Texans</option>
                                    <option value="Indianapolis Colts"@if ($game->underdog=='Indianapolis Colts') selected @endif>Indianapolis Colts</option>
                                    <option value="Jacksonville Jaguars"@if ($game->underdog=='Jacksonville Jaguars') selected @endif>Jacksonville Jaguars</option>
                                    <option value="Kansas City Chiefs"@if ($game->underdog=='Kansas City Chiefs') selected @endif>Kansas City Chiefs</option>
                                    <option value="Los Angeles Chargers"@if ($game->underdog=='Los Angeles Chargers') selected @endif>Los Angeles Chargers</option>
                                    <option value="Los Angeles Rams"@if ($game->underdog=='Los Angeles Rams') selected @endif>Los Angeles Rams</option>
                                    <option value="Miami Dolphins"@if ($game->underdog=='Miami Dolphins') selected @endif>Miami Dolphins</option>
                                    <option value="Minnesota Vikings"@if ($game->underdog=='Minnesota Vikings') selected @endif>Minnesota Vikings</option>
                                    <option value="New England Patirots"@if ($game->underdog=='New England Patirots') selected @endif>New England Patirots</option>
                                    <option value="New Orleans Saints"@if ($game->underdog=='New Orleans Saints') selected @endif>New Orleans Saints</option>
                                    <option value="New York Giants"@if ($game->underdog=='New York Giants') selected @endif>New York Giants</option>
                                    <option value="New York Jets"@if ($game->underdog=='New York Jets') selected @endif>New York Jets</option>
                                    <option value="Oakland Raiders"@if ($game->underdog=='Oakland Raiders') selected @endif>Oakland Raiders</option>
                                    <option value="Philadelphia Eagles"@if ($game->underdog=='Philadelphia Eagles') selected @endif>Philadelphia Eagles</option>
                                    <option value="Pittsburg Steelers"@if ($game->underdog=='Pittsburg Steelers') selected @endif>Pittsburg Steelers</option>
                                    <option value="San Francisco 49ers"@if ($game->underdog=='San Francisco 49ers') selected @endif>San Francisco 49ers</option>
                                    <option value="Seattle Seahawks"@if ($game->underdog=='Seattle Seahawks') selected @endif>Seattle Seahawks</option>
                                    <option value="Tampa Bay Buccaneers"@if ($game->underdog=='Tampa Bay Buccaneers') selected @endif>Tampa Bay Buccaneers</option>
                                    <option value="Tennessee Titans"@if ($game->underdog=='Tennessee Titans') selected @endif>Tennessee Titans</option>
                                    <option value="Washington Redskins"@if ($game->underdog=='Washington Redskins') selected @endif>Washington Redskins</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Game Time</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="game_time">

                                    <option value="thursday_early"@if ($game->game_time=='thursday_early') selected @endif>Thursday Early Game</option>
                                    <option value="thursday_late"@if ($game->game_time=='thursday_late') selected @endif>Thursday Late Game</option>
                                    <option value="thursday_night"@if ($game->game_time=='thursday_night') selected @endif>Thursday Night Game</option>
                                    <option value="saturday_early"@if ($game->game_time=='saturday_early') selected @endif>Saturday Early Game</option>
                                    <option value="saturday_late"@if ($game->game_time=='saturday_late') selected @endif>Saturday Late Game</option>
                                    <option value="saturday_night"@if ($game->game_time=='saturday_night') selected @endif>Saturday Night Game</option>
                                    <option value="sunday_morning"@if ($game->game_time=='sunday_morning') selected @endif>Sunday Morning Game</option>
                                    <option value="sunday_early"@if ($game->game_time=='sunday_early') selected @endif>Sunday Early Game</option>
                                    <option value="sunday_late"@if ($game->game_time=='sunday_late') selected @endif>Sunday Late Game</option>
                                    <option value="sunday_night"@if ($game->game_time=='sunday_night') selected @endif>Sunday Night Game</option>
                                    <option value="monday_night"@if ($game->game_time=='monday_night') selected @endif>Monday Night Game</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-xs btn-success" type="submit">
                                    Update Pick
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
</body>
</html>
