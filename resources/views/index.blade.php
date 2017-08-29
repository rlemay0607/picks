<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">
    <link rel="shortcut icon" href="images/fav.jpeg">
    <title>Weekly Picks</title>

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
<!-- header -->

<body>

@include('layouts.app')


<!-- Search - Open panel -->

<div class="container">
    @if($settings->show_message == "1")
    <div class="row">
        <div class="col-xs-12  col-md-12">
        @if($settings->message_color == "success")
            <div class="alert alert-success" role="alert"><b><center>{{$settings->admin_message}}</center></b></div>
            @endif
            @if($settings->message_color == "info")
            <div class="alert alert-info" role="alert"><b><center>{{$settings->admin_message}}</center></b></div>
            @endif
            @if($settings->message_color == "warning")
            <div class="alert alert-warning" role="alert"><b><center>{{$settings->admin_message}}</center></b></div>
            @endif
            @if($settings->message_color == "danger")
            <div class="alert alert-danger" role="alert"><b><center>{{$settings->admin_message}}</center></b></div>
            @endif
        </div>
    </div>
    @endif
    <div class="row">

        <div class="col-xs-12  col-md-8">
            <div class="sidebar  boxed  push-down-30">
                <div class="row">

                    <div class="col-xs-10  col-xs-offset-1">
                        <div class="text-center">
                            <h4>Weekly Standings Top 10</h4>
                        </div>
                        <table class="table ">
                            <thead>
                            <tr>
                                <th>Team Name</th>
                                <th>Total Points</th>
                                <th>Points Behind</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($weekpoints as $weekpoint)
                                <tr  @if($weekpoint->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif >

                                    <td>{{$weekpoint->team_name}}</td>
                                    <td>{{$weekpoint->total}}</td>
                                    <td>@if($weekmax - $weekpoint->total == '0') -- @endif @if($weekmax - $weekpoint->total > '0') {{$weekmax - $weekpoint->total}}  @endif</td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <form action="{{ route('week.standings') }}" method="get" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                        View Full List
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="sidebar  boxed  push-down-30">
                <div class="row">

                    <div class="col-xs-10  col-xs-offset-1">
                        <div class="text-center">
                            <h4>Season Standings Top 10</h4>
                        </div>
                        <table class="table" >
                            <thead>
                            <tr>

                                <th>Team Name</th>
                                <th>Total Points</th>
                                <th>Points Behind</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seasonpoints as $seasonpoint)
                            <tr @if($seasonpoint->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                <td>{{$seasonpoint->team_name}}</td>
                                <td>{{$seasonpoint->total}}</td>
                                <td>@if($seasonmax - $seasonpoint->total == '0') -- @endif @if($seasonmax - $seasonpoint->total > '0') {{$seasonmax - $seasonpoint->total}}  @endif</td>

                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <form action="{{ route('season.standings') }}" method="get" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                        View Full List
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        @include('includes.sidebar')
    </div>
</div>
@include('includes.footer')
</body>
</html>
