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

        <div class="col-sm-3" style="background-color:#64BB15; border-radius: 20px;  padding-top: 5px; padding-bottom: 5px" align="center">
            <font color="white"><h4><b>This Week Payout</b></h4>
            <h4><c>$120</c></h4></font>
    </div>
        <div class="col-sm-1">
        </br>
        </div>
        <div class="col-sm-3" style="background-color:#64BB15; border-radius: 20px; padding-top: 5px; padding-bottom: 5px" align="center">
            <font color="white"><h4><b>Season Payout</b></h4>
            <h4><c>$120</c></h4></font>
        </div>
        <div class="col-sm-1">
            </br>
        </div>
        <div class="col-sm-3" style="background-color:#64BB15; border-radius: 20px; padding-top: 5px; padding-bottom: 5px" align="center">
            <font color="white"><h4><b>Admin Payout</b></h4>
            <h4><c>$120</c></h4></font>
        </div>
        <div class="col-sm-1">
            </br>
        </div>
    </div>
</div>
</br>
    <div class="container">
    <div class="row">


    </div>
</div>
@include('includes.footer')
</body>
</html>

