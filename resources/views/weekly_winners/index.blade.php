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

    <div class="row">

        <div class="col-xs-12  col-md-12">

            <div class="sidebar  boxed  push-down-30">
                <div class="row">

                    <div class="col-xs-10  col-xs-offset-1">
                        <div class="text-center">
                            <h4>Season Standings</h4>
                        </div>
                        <table class="table" >
                            <thead>
                            <tr>

                                <th>Week</th>
                                <th>Winner</th>
                                <th>Points</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($week1s as $week1)
        <tr @if($week1->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>1</td>
                                    <td>{{$week1->team_name}}</td>
                                    <td>{{$week1->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week2s as $week2)
        <tr @if($week2->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>2</td>
                                    <td>{{$week2->team_name}}</td>
                                    <td>{{$week2->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week3s as $week3)
        <tr @if($week3->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>3</td>
                                    <td>{{$week3->team_name}}</td>
                                    <td>{{$week3->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week4s as $week4)
        <tr @if($week4->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>4</td>
                                    <td>{{$week4->team_name}}</td>
                                    <td>{{$week4->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week5s as $week5)
        <tr @if($week5->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>5</td>
                                    <td>{{$week5->team_name}}</td>
                                    <td>{{$week5->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week6s as $week6)
        <tr @if($week6->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>6</td>
                                    <td>{{$week6->team_name}}</td>
                                    <td>{{$week6->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week7s as $week7)
        <tr @if($week7->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>7</td>
                                    <td>{{$week7->team_name}}</td>
                                    <td>{{$week7->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week8s as $week8)
        <tr @if($week8->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>8</td>
                                    <td>{{$week8->team_name}}</td>
                                    <td>{{$week8->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week9s as $week9)
        <tr @if($week9->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>9</td>
                                    <td>{{$week9->team_name}}</td>
                                    <td>{{$week9->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week10s as $week10)
        <tr @if($week10->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>10</td>
                                    <td>{{$week10->team_name}}</td>
                                    <td>{{$week10->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week11s as $week11)
        <tr @if($week11->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>11</td>
                                    <td>{{$week11->team_name}}</td>
                                    <td>{{$week11->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week12s as $week12)
        <tr @if($week12->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>12</td>
                                    <td>{{$week12->team_name}}</td>
                                    <td>{{$week12->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week13s as $week13)
        <tr @if($week13->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>13</td>
                                    <td>{{$week13->team_name}}</td>
                                    <td>{{$week13->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week14s as $week14)
        <tr @if($week14->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>14</td>
                                    <td>{{$week14->team_name}}</td>
                                    <td>{{$week14->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week15s as $week15)
        <tr @if($week15->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>15</td>
                                    <td>{{$week15->team_name}}</td>
                                    <td>{{$week15->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week16s as $week16)
        <tr @if($week16->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>16</td>
                                    <td>{{$week16->team_name}}</td>
                                    <td>{{$week16->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week17s as $week17)
        <tr @if($week17->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>17</td>
                                    <td>{{$week17->team_name}}</td>
                                    <td>{{$week17->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week18s as $week18)
        <tr @if($week18->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>Wild Card</td>
                                    <td>{{$week18->team_name}}</td>
                                    <td>{{$week18->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week19s as $week19)
        <tr @if($week19->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>Divisional</td>
                                    <td>{{$week19->team_name}}</td>
                                    <td>{{$week19->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week20s as $week20)
        <tr @if($week20->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>Championship</td>
                                    <td>{{$week20->team_name}}</td>
                                    <td>{{$week20->total}}</td>

                                </tr>
                            @endforeach

                            @foreach($week21s as $week21)
        <tr @if($week21->team_name == Auth::user() ->team_name) bgcolor="yellow" @endif>

                                    <td>Super Bowl</td>
                                    <td>{{$week21->team_name}}</td>
                                    <td>{{$week21->total}}</td>

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
