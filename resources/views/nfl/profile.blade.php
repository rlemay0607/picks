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

@include('includes.header')
    @include('admin.includes.error')

<div class="container">
    <div class="row">
        <div class="col-xs-12  col-md-12">
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                <div class="col-xs-10  col-xs-offset-1">
                    <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="team_name">Team Name</label>
                            <input type="text" name="team_name" value="{{ $user->team_name }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                        </div>

                        <div>
                           <b>Select your default picks you will have the ability to changed these picks after the sheets are created each week</b>
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="options" id="options1" value="f" @if ($user->options=='f') checked @endif>
                                    Favorits
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="options" id="options2" value="u" @if ($user->options=='u') checked @endif>
                                    Under Dogs
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="options" id="options3" value="r" @if ($user->options=='r') checked @endif>
                                    Random
                                </label>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="team">
                                <option value="uploads/avatars/default.png" @if ($user->avatar=='uploads/avatars/default.png') selected @endif>No Team</option>
                                <option value="uploads/avatars/Arizona_Cardinals.gif" @if ($user->avatar=='uploads/avatars/Arizona_Cardinals.gif') selected @endif>Arizona Cardinals</option>
                                <option value="uploads/avatars/Atlanta_falcons.gif" @if ($user->avatar=='uploads/avatars/Atlanta_falcons.gif') selected @endif>Atlanata Falcons</option>
                                <option value="uploads/avatars/Baltimore_Ravens.gif" @if ($user->avatar=='uploads/avatars/Baltimore_Ravens.gif') selected @endif>Baltimore Ravens</option>
                                <option value="uploads/avatars/Buffalo_bills.gif" @if ($user->avatar=='uploads/avatars/Buffalo_bills.gif') selected @endif>Buffalo Bills</option>
                                <option value="uploads/avatars/Carolina_Panthers.gif" @if ($user->avatar=='uploads/avatars/Carolina_Panthers.gif') selected @endif>Carolina Panthers</option>
                                <option value="uploads/avatars/Chicago_Bears.gif" @if ($user->avatar=='uploads/avatars/Chicago_Bears.gif') selected @endif>Chicago Bears</option>
                                <option value="uploads/avatars/Cincinnati_Bengals.gif" @if ($user->avatar=='uploads/avatars/Cincinnati_Bengals.gif') selected @endif>Cincinnati Bengals</option>
                                <option value="uploads/avatars/Cleveland_Browns.gif" @if ($user->avatar=='uploads/avatars/Cleveland_Browns.gif') selected @endif>Cleveland Browns</option>
                                <option value="uploads/avatars/Dallas_Cowboys.gif" @if ($user->avatar=='uploads/avatars/Dallas_Cowboys.gif') selected @endif>Dallas Cowboys</option>
                                <option value="uploads/avatars/Denver_Broncos.gif" @if ($user->avatar=='uploads/avatars/Denver_Broncos.gif') selected @endif>Denver Broncos</option>
                                <option value="uploads/avatars/Detroit_Lions.gif" @if ($user->avatar=='uploads/avatars/Detroit_Lions.gif') selected @endif>Detroit Lions</option>
                                <option value="uploads/avatars/Greenbay_Packers.gif" @if ($user->avatar=='uploads/avatars/Greenbay_Packers.gif') selected @endif>Greenbay Packers</option>
                                <option value="uploads/avatars/Houston_Texans.gif" @if ($user->avatar=='uploads/avatars/Houston_Texans.gif') selected @endif>Houston Texans</option>
                                <option value="uploads/avatars/Indianapolis_Colts.gif" @if ($user->avatar=='uploads/avatars/Indianapolis_Colts.gif') selected @endif>Indianapolis Colts</option>
                                <option value="uploads/avatars/Jacksonville_Jaguars.gif" @if ($user->avatar=='uploads/avatars/Jacksonville_Jaguars.gif') selected @endif>Jacksonville Jaguars</option>
                                <option value="uploads/avatars/Kansas_City_Chiefs.gif" @if ($user->avatar=='uploads/avatars/Kansas_City_Chiefs.gif') selected @endif>Kansas City Chiefs</option>
                                <option value="uploads/avatars/Los_Angeles_Chargers.gif" @if ($user->avatar=='uploads/avatars/Los_Angeles_Chargers.gif') selected @endif>Los Angeles Chargers</option>
                                <option value="uploads/avatars/Los_Angeles_Rams.gif" @if ($user->avatar=='uploads/avatars/Los_Angeles_Rams.gif') selected @endif>Los Angeles Rams</option>
                                <option value="uploads/avatars/Miami_Dolphins.gif" @if ($user->avatar=='uploads/avatars/Miami_Dolphins.gif') selected @endif>Miami Dolphins</option>
                                <option value="uploads/avatars/Minnesota_Vikings.gif" @if ($user->avatar=='uploads/avatars/Minnesota_Vikings.gif') selected @endif>Minnesota Vikings</option>
                                <option value="uploads/avatars/New_England_Patirots.gif" @if ($user->avatar=='uploads/avatars/New_England_Patirots.gif') selected @endif>New England Patirots</option>
                                <option value="uploads/avatars/New_Orleans_Saints.gif" @if ($user->avatar=='uploads/avatars/New_Orleans_Saints.gif') selected @endif>New Orleans Saints</option>
                                <option value="uploads/avatars/New_York_Giants.gif" @if ($user->avatar=='uploads/avatars/New_York_Giants.gif') selected @endif>New York Giants</option>
                                <option value="uploads/avatars/New_York_Jets.gif" @if ($user->avatar=='uploads/avatars/New_York_Jets.gif') selected @endif>New York Jets</option>
                                <option value="uploads/avatars/Oakland_Raiders.gif" @if ($user->avatar=='uploads/avatars/Oakland_Raiders.gif') selected @endif>Oakland Raiders</option>
                                <option value="uploads/avatars/Philadelphia_Eagles.gif" @if ($user->avatar=='uploads/avatars/Philadelphia_Eagles.gif') selected @endif>Philadelphia Eagles</option>
                                <option value="uploads/avatars/Pittsburgh_Steelers.gif" @if ($user->avatar=='uploads/avatars/Pittsburgh_Steelers.gif') selected @endif>Pittsburg Steelers</option>
                                <option value="uploads/avatars/San_Francisco_49ers.gif" @if ($user->avatar=='uploads/avatars/San_Francisco_49ers.gif') selected @endif>San Francisco 49ers</option>
                                <option value="uploads/avatars/Seattle_Seahawks.gif" @if ($user->avatar=='uploads/avatars/Seattle_Seahawks.gif') selected @endif>Seattle Seahawks</option>
                                <option value="uploads/avatars/Tampa_Bay_Buccaneers.gif" @if ($user->avatar=='uploads/avatars/Tampa_Bay_Buccaneers.gif') selected @endif>Tampa Bay Buccaneers</option>
                                <option value="uploads/avatars/Tennessee_Titans.gif" @if ($user->avatar=='uploads/avatars/Tennessee_Titans.gif') selected @endif>Tennessee Titans</option>
                                <option value="uploads/avatars/Washington_Redskins.gif" @if ($user->avatar=='uploads/avatars/Washington_Redskins.gif') selected @endif>Washington Redskins</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">
                                    Update Porfile
                                </button>
                            </div>
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

