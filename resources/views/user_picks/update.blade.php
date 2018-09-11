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
        <div class="col-sm-5 col-sm-offset-1">
            <b>Set all open picks to one of the following!</b>
        </div>
    <div class="col-sm-6 col-xs-6">

            <a href="{{ route('set.underdog') }}" class="btn btn-sm btn-success">
                Underdogs
            </a> <a href="{{ route('set.favorites') }}" class="btn btn-sm btn-success">
                Favorites
            </a>
             <a href="{{ route('set.random') }}" class="btn btn-sm btn-success">
                Random
            </a>


        </div>

    </div>
    <div class="row">
        <div class="col-xs-12  col-md-12">
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">


                        <table class="table">
                            <thead>
                            <tr>
                                <th>Favorit</th>
                                <th>Underdog</th>
                                <th>Results</th>


                            </tr>
                            </thead>
                            <tbody>




                           
<!-- Sunday Morning -->

                            @if($sunday_morning_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Morning Games</th>
                                </tr>
                                @endif
                                @foreach($sunday_morning as $sundaymorning)
                                    @if($sundaymorning->locked != '1')
                                        <tr>
                                            <th colspan="3">{{$sundaymorning->playoff_name}} {{$sundaymorning->game_type}}</th>
                                        </tr>
                                        <tr>
                                            <form action="{{ route('user.pick.update', ['id' => $sundaymorning->id]) }}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            <td><input type="radio" name="options" id="options1" value="f" @if ($sundaymorning->pick=='f') checked @endif> @if ($sundaymorning->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaymorning->master_favorit }} @if($sundaymorning->home_team !='none') <font color="red"> <b>- @endif
                                                        {{$sundaymorning->master_spread}}</b></font></td>
                                            <td><input type="radio" name="options" id="options2" value="u" @if ($sundaymorning->pick=='u') checked @endif>  @if ($sundaymorning->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaymorning->master_underdog}} @if($sundaymorning->home_team !='none') <font color="green"> <b>+ @endif {{$sundaymorning->master_spread}}</b></font></td>
                                            <td><button class="btn btn-sm btn-success" type="submit">
                                                    Update Pick
                                                </button>
                                            </td>
                                            </form>

                                        </tr>
                                        @endif
                                    @if($sundaymorning->locked == '1')
                                        <tr>
                                            <th colspan="3">{{$sundaymorning->playoff_name}} {{$sundaymorning->game_type}}</th>
                                        </tr>
                                    <tr>
                                        <td>@if($sundaymorning->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif @if ($sundaymorning->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaymorning->master_favorit }} @if($sundaymorning->home_team !='none') <font color="red"> <b>- @endif{{$sundaymorning->master_spread}}</b></font></td>
                                        <td>@if($sundaymorning->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundaymorning->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaymorning->master_underdog}} @if($sundaymorning->home_team !='none') <font color="green"> <b>+ @endif {{$sundaymorning->master_spread}}</b></font></td>
                                        <td>@if($sundaymorning->game_scored == '1')@if($sundaymorning->point == '1')<font color="green">Win</font>@endif @if($sundaymorning->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                    @endif
                        @endforeach

<!-- Sunday Early -->

                            @if($sunday_early_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Early Games</th>
                                </tr>
                                @endif
                                @foreach($sunday_early as $sundayearly)
                                    @if($sundayearly->locked != '1')
                                        <tr>
                                            <th colspan="3">{{$sundayearly->playoff_name}} {{$sundayearly->game_type}}</th>
                                        </tr>
                                        <tr>
                                            <form action="{{ route('user.pick.update', ['id' => $sundayearly->id]) }}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            <td><input type="radio" name="options" id="options1" value="f" @if ($sundayearly->pick=='f') checked @endif> @if ($sundayearly->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundayearly->master_favorit }} @if($sundayearly->home_team !='none') <font color="red"> <b>- @endif @if($sundayearly->master_spread != '0'){{$sundayearly->master_spread}}@endif</b></font></td>
                                            <td><input type="radio" name="options" id="options2" value="u" @if ($sundayearly->pick=='u') checked @endif>  @if ($sundayearly->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif {{ $sundayearly->master_underdog}} @if($sundayearly->home_team !='none') <font color="green"> <b>+ @endif @if($sundayearly->master_spread != '0'){{$sundayearly->master_spread}} @endif</b></font></td>
                                            <td><button class="btn btn-sm btn-success" type="submit">
                                                    Update Pick
                                                </button>
                                            </td>
                                            </form>

                                        </tr>
                                        @endif
                                    @if($sundayearly->locked == '1')
                                        <tr>
                                            <th colspan="3">{{$sundayearly->playoff_name}} {{$sundayearly->game_type}}</th>
                                        </tr>
                                    <tr>
                                        <td>@if($sundayearly->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundayearly->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundayearly->master_favorit }} @if($sundayearly->home_team !='none') <font color="red"> <b>- @endif @if($sundayearly->master_spread != '0'){{$sundayearly->master_spread}}@endif</b></font></td>
                                        <td>@if($sundayearly->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundayearly->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundayearly->master_underdog}} @if($sundayearly->home_team !='none') <font color="green"> <b>+ @endif @if($sundayearly->master_spread != '0'){{$sundayearly->master_spread}} @endif</b></font></td>
                                        <td>@if($sundayearly->game_scored == '1')@if($sundayearly->point == '1')<font color="green">Win</font>@endif @if($sundayearly->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                    @endif
                        @endforeach

<!-- Sunday Late -->

                            @if($sunday_late_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Late Games</th>
                                </tr>
                                @endif
                                @foreach($sunday_late as $sundylate)
                                    @if($sundylate->locked != '1')
                                        <tr>
                                            <th colspan="3">{{$sundylate->playoff_name}} {{$sundylate->game_type}}</th>
                                        </tr>
                                        <tr>
                                            <form action="{{ route('user.pick.update', ['id' => $sundylate->id]) }}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            <td><input type="radio" name="options" id="options1" value="f" @if ($sundylate->pick=='f') checked @endif> @if ($sundylate->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundylate->master_favorit }} @if($sundylate->home_team !='none') <font color="red"> <b>-@endif @if($sundylate->master_spread != '0'){{$sundylate->master_spread}}@endif</b></font></td>
                                            <td><input type="radio" name="options" id="options2" value="u" @if ($sundylate->pick=='u') checked @endif>  @if ($sundylate->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundylate->master_underdog}} @if($sundylate->home_team !='none') <font color="green"> <b>+ @endif @if($sundylate->master_spread != '0'){{$sundylate->master_spread}} @endif</b></font></td>
                                            <td><button class="btn btn-sm btn-success" type="submit">
                                                    Update Pick
                                                </button>
                                            </td>
                                            </form>

                                        </tr>
                                        @endif
                                    @if($sundylate->locked == '1')
                                        <tr>
                                            <th colspan="3">{{$sundylate->playoff_name}} {{$sundylate->game_type}}</th>
                                        </tr>
                                    <tr>
                                        <td>@if($sundylate->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundylate->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundylate->master_favorit }} @if($sundylate->home_team !='none') <font color="red"> <b>-@endif @if($sundylate->master_spread != '0'){{$sundylate->master_spread}}@endif</b></font></td>
                                        <td>@if($sundylate->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundylate->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundylate->master_underdog}} @if($sundylate->home_team !='none') <font color="green"> <b>+@endif @if($sundylate->master_spread != '0'){{$sundylate->master_spread}}@endif</b></font></td>
                                        <td>@if($sundylate->game_scored == '1')@if($sundylate->point == '1')<font color="green">Win</font>@endif @if($sundylate->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>

                                    </tr>
                                    @endif
                        @endforeach

<!-- Sunday Night -->

                            @if($sunday_night_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Sunday Night Games</th>
                                </tr>
                                @endif
                                @foreach($sunday_night as $sundaynight)
                                    @if($sundaynight->locked != '1')
                                        <tr>
                                            <th colspan="3">{{$sundaynight->playoff_name}} {{$sundaynight->game_type}}</th>
                                        </tr>
                                        <tr>
                                            <form action="{{ route('user.pick.update', ['id' => $sundaynight->id]) }}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <td><input type="radio" name="options" id="options1" value="f" @if ($sundaynight->pick=='f') checked @endif> @if ($sundaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaynight->master_favorit }} @if($sundaynight->home_team !='none') <font color="red"> <b>-@endif @if($sundaynight->master_spread != '0'){{$sundaynight->master_spread}}@endif</b></font></td>
                                                <td><input type="radio" name="options" id="options2" value="u" @if ($sundaynight->pick=='u') checked @endif>  @if ($sundaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaynight->master_underdog}} @if($sundaynight->home_team !='none') <font color="green"> <b>+ @endif @if($sundaynight->master_spread != '0'){{$sundaynight->master_spread}}@endif</b></font></td>
                                                <td><button class="btn btn-sm btn-success" type="submit">
                                                        Update Pick
                                                    </button>
                                                </td>
                                            </form>

                                        </tr>
                                        </tr>
                                        @endif
                                    @if($sundaynight->locked == '1')
                                        <tr>
                                            <th colspan="3">{{$sundaynight->playoff_name}} {{$sundaynight->game_type}}</th>
                                        </tr>
                                        <tr>
                                            <td>@if($sundaynight->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaynight->master_favorit }} @if($sundaynight->home_team !='none') <font color="red"> <b>-@endif @if($sundaynight->master_spread != '0'){{$sundaynight->master_spread}} @endif</b></font></td>
                                            <td>@if($sundaynight->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif  @if ($sundaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $sundaynight->master_underdog}} @if($sundaynight->home_team !='none') <font color="green"> <b>+@endif @if($saturdayearly->master_spread != '0'){{$sundaynight->master_spread}} @endif</b></font></td>
                                            <td>@if($sundaynight->game_scored == '1')@if($sundaynight->point == '1')<font color="green">Win</font>@endif @if($sundaynight->point == '0')<font color="red">Loss</font>@endif @endif
                                            </td>

                                        </tr>
                                    @endif
                        @endforeach

<!-- Monday Night -->

                            @if($monday_night_count>0)
                                <tr bgcolor="#d3d3d3">
                                    <th colspan="3">Monday Night Games</th>
                                </tr>
                                @endif
                                @foreach($monday_night as $mondaynight)
                                    @if($mondaynight->locked != '1')
                                        <tr>
                                            <form action="{{ route('user.pick.update', ['id' => $mondaynight->id]) }}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            <td><input type="radio" name="options" id="options1" value="f" @if ($mondaynight->pick=='f') checked @endif> @if ($mondaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $mondaynight->master_favorit }} @if($mondaynight->home_team !='none')<font color="red"> <b>-@endif{{$mondaynight->master_spread}}</b></font></td>
                                            <td><input type="radio" name="options" id="options2" value="u" @if ($mondaynight->pick=='u') checked @endif>  @if ($mondaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $mondaynight->master_underdog}} @if($mondaynight->home_team !='none')<font color="green"> <b>+@endif{{$mondaynight->master_spread}}</b></font></td>
                                            <td><button class="btn btn-sm btn-success" type="submit">
                                                    Update Pick
                                                </button>
                                            </td>
                                            </form>

                                        </tr>
                                        @endif
                                    @if($mondaynight->locked == '1')
                                    <tr>
                                        <td>@if($mondaynight->pick == 'f')<font color="green"> <span class="glyphicon glyphicon-check"></span></font>@endif  @if ($mondaynight->home_team=='f') <span class="glyphicon glyphicon-home"></span> @endif{{ $mondaynight->master_favorit }} @if($mondaynight->home_team !='none')<font color="red"> <b>-@endif{{$mondaynight->master_spread}}</b></font></td>
                                        <td>@if($mondaynight->pick == 'u')<font color="green"><span class="glyphicon glyphicon-check"></span></font>@endif  @if ($mondaynight->home_team=='u') <span class="glyphicon glyphicon-home"></span> @endif{{ $mondaynight->master_underdog}} @if($mondaynight->home_team !='none')<font color="green"> <b>+@endif{{$mondaynight->master_spread}}</b></font></td>
                                        <td>@if($mondaynight->game_scored == '1')@if($mondaynight->point == '1')<font color="green">Win</font>@endif @if($mondaynight->point == '0')<font color="red">Loss</font>@endif @endif
                                        </td>


                                    </tr>
                                    @endif
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

