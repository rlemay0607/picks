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
                        <h3>{{$team_name->team_name}}</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Favorit</th>
                                <th>Underdog</th>
                                <th>Results</th>

                            </tr>
                            </thead>
                            <tbody>

                            @if($saturday_early_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Saturday Early Games</th>
                                </tr>
                                @foreach($saturday_early as $saturdayearly)
                                    <tr>
                                        <th colspan="3">{{$saturdayearly->playoff_name}} {{$saturdayearly->game_type}}</th>
                                    </tr>
                                   <tr>
                                    <td>
                                    <div>
                                        <div>
                                           @if($saturdayearly->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif  @if ($saturdayearly->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif <font color="red"> <b>-{{$saturdayearly->master_spread}}</b></font>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-xs-12  col-sm-8">
                                                    <div>
                                                        {{ $saturdayearly->master_favorit }}
                                                    </div>
                                                    <div >
                                                        {{number_format((\App\UserPicks::where([['master_game_id',$saturdayearly->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$saturdayearly->master_game_id)->count() )*100),2}}% User Picked
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    </td>
                                   <td>
                                       <div>
                                           <div>
                                   <table>
                                               <tr>
                                       <td>
                                       @if ($saturdayearly->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif
                                       @if($saturdayearly->pick == 'u')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif
                                       <font color="green"> <b>+{{$saturdayearly->master_spread}}</b></font>
                                       </td>
                                   </tr>
                                   </table>
                                           </div>
                                           <div>
                                               <div class="row">
                                                   <div class="col-xs-12  col-sm-8">
                                                       <div>
                                                          {{ $saturdayearly->master_favorit }}
                                                       </div>
                                                       <div>
                                                           {{number_format((\App\UserPicks::where([['master_game_id',$saturdayearly->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$saturdayearly->master_game_id)->count() )*100),2}}% User Picked
                                                       </div>
                                                   </div>

                                               </div>
                                           </div>
                                       </div>

                                   </td>
                                       <td>@if($saturdayearly->game_scored == '1')@if($saturdayearly->point == '1')<font color="green">Win</font>@endif @if($saturdayearly->point == '0')<font color="red">Loss</font>@endif @endif
                                       </td>
                                   </tr>
                                @endforeach
                            @endif

                            @if($saturday_late_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Saturday Late Games</th>
                                </tr>
                                @foreach($saturday_late as $saturdaylate)
                                    <tr>
                                        <th colspan="3">{{$saturdaylate->playoff_name}} {{$saturdaylate->game_type}}</th>
                                    </tr>
                                    <tr>

                                        <td>@if($saturdaylate->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($saturdaylate->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $saturdaylate->master_favorit }} <font color="red"> <b>-{{$saturdaylate->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$saturdaylate->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$saturdaylate->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($saturdaylate->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($saturdaylate->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $saturdaylate->master_underdog}} <font color="green"> <b>+{{$saturdaylate->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$saturdaylate->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$saturdaylate->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($saturdaylate->game_scored == '1')@if($saturdaylate->point == '1')<font color="green">Win</font>@endif @if($saturdaylate->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                            @if($saturday_night_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Saturday Night Games</th>
                                </tr>
                                @foreach($saturday_night as $saturdaynight)
                                    <tr>
                                        <th colspan="3">{{$saturdaynight->playoff_name}} {{$saturdaynight->game_type}}</th>
                                    </tr>
                                    <tr>

                                        <td>@if($saturdaynight->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($saturdaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $saturdaynight->master_favorit }} <font color="red"> <b>-{{$saturdaynight->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$saturdanight->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$saturdaynight->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($saturdaynight->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($saturdaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $saturdaynight->master_underdog}} <font color="green"> <b>+{{$saturdaynight->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$saturdaynight->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$saturdaynight->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($saturdaynight->game_scored == '1')@if($saturdaynight->point == '1')<font color="green">Win</font>@endif @if($saturdaynight->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                            @if($sunday_morning_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Saturday Late Games</th>
                                </tr>
                                @foreach($sunday_morning as $sundaymorning)
                                    <tr>
                                        <th colspan="3">{{$sundaymorning->playoff_name}} {{$sundaymorning->game_type}}</th>
                                    </tr>
                                    <tr>

                                        <td>@if($sundaymorning->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaymorning->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaymorning->master_favorit }} <font color="red"> <b>-{{$sundaymorning->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundaymorning->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$sundaymorning->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundaymorning->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaymorning->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaymorning->master_underdog}} <font color="green"> <b>+{{$sundaymorning->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundaymorning->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$sundaymorning->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundaymorning->game_scored == '1')@if($sundaymorning->point == '1')<font color="green">Win</font>@endif @if($sundaymorning->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif


                            @if($sunday_early_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Early Games</th>
                                </tr>
                                @foreach($sunday_early as $sundayearly)
                                    <tr>
                                        <th colspan="3">{{$sundayearly->playoff_name}} {{$sundayearly->game_type}}</th>
                                    </tr>
                                    <tr>

                                        <td>@if($sundayearly->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundayearly->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundayearly->master_favorit }} <font color="red"> <b>-{{$sundayearly->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundayearly->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$sundayearly->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundayearly->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundayearly->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundayearly->master_underdog}} <font color="green"> <b>+{{$sundayearly->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundayearly->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$sundayearly->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundayearly->game_scored == '1')@if($sundayearly->point == '1')<font color="green">Win</font>@endif @if($sundayearly->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                            @if($sunday_late_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Late Games</th>
                                </tr>
                                @foreach($sunday_late as $sundaylate)
                                    <tr>
                                        <th colspan="3">{{$sundaylate->playoff_name}} {{$sundaylate->game_type}}</th>
                                    </tr>
                                    <tr>

                                        <td>@if($sundaylate->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaylate->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaylate->master_favorit }} <font color="red"> <b>-{{$sundaylate->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundaylate->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$sundaylate->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundaylate->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaylate->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaylate->master_underdog}} <font color="green"> <b>+{{$sundaylate->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundaylate->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$sundaylate->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundaylate->game_scored == '1')@if($sundaylate->point == '1')<font color="green">Win</font>@endif @if($sundaylate->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif


                            @if($sunday_night_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Night Games</th>
                                </tr>
                                @foreach($sunday_night as $sundaynight)
                                    <tr>
                                        <th colspan="3">{{$sundaynight->playoff_name}} {{$sundaynight->game_type}}</th>
                                    </tr>
                                    <tr>

                                        <td>@if($sundaynight->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaynight->master_favorit }} <font color="red"> <b>-{{$sundaynight->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundaynight->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$sundaynight->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundaynight->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaynight->master_underdog}} <font color="green"> <b>+{{$sundaynight->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$sundaynight->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$sundaynight->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($sundaynight->game_scored == '1')@if($sundaynight->point == '1')<font color="green">Win</font>@endif @if($sundaynight->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                            @if($monday_night_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Monday Night Games</th>
                                </tr>
                                @foreach($monday_night as $mondaynight)
                                    <tr>

                                        <td>@if($mondaynight->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($mondaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $mondaynight->master_favorit }} <font color="red"> <b>-{{$mondaynight->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$mondaynight->master_game_id],['pick','f']])->count())/ (\App\UserPicks::where('master_game_id',$mondaynight->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($mondaynight->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif @if ($mondaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $mondaynight->master_underdog}} <font color="green"> <b>+{{$mondaynight->master_spread}}</b></font></br>{{number_format((\App\UserPicks::where([['master_game_id',$mondaynight->master_game_id],['pick','u']])->count())/ (\App\UserPicks::where('master_game_id',$mondaynight->master_game_id)->count() )*100),2}}% User Picked</td>
                                        <td>@if($mondaynight->game_scored == '1')@if($mondaynight->point == '1')<font color="green">Win</font>@endif @if($mondaynight->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                @endforeach
                            @endif

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

