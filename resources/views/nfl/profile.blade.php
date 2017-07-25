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
                            <label for="password">New Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="avatar">Upload new avatar</label>
                            <input type="file" name="avatar" class="form-control">
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

