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
@include('admin.includes.error')


<div class="container">
    <div class="row">
        <div class="col-xs-12  col-md-12">
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">

                    </br>

            <form action="{{ route('settings.update') }}" method="post" >
                {{csrf_field()}}

                <div class="form-group">
                    <label for="address">Message</label>
                    <input type="text" name="message" value="{{ $settings->admin_message }}" class="form-control">
                </div>

Message Color
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="message_color" id="color1" value="success" @if ($settings->message_color=='success') checked @endif>
                                Green
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="message_color" id="color2" value="info" @if ($settings->message_color=='info') checked @endif>
                                Blue
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="message_color" id="color3" value="warning" @if ($settings->message_color=='warning') checked @endif>
                                Yellow
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="message_color" id="color4" value="danger" @if ($settings->message_color=='danger') checked @endif>
                                Red
                            </label>
                        </div>


Show Message
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="show_message" id="options1" value="0" @if ($settings->show_message=='0') checked @endif>
                                    No
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="show_message" id="options2" value="1" @if ($settings->show_message=='1') checked @endif>
                                    Yes
                                </label>
                            </div>
                        </div>


                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Settings
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