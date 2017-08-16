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
                            <h4>User Admin</h4>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Team Name</th>

                                <th>Permissions</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->team_name }}</td>

                                <td>@if($user->admin)
                                        <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Admin</a>
                                    @else
                                        <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-xs btn-success">Make Admin</a>
                                    @endif</td>
                                <td> <a href="{{ route('user.edit',['id' => $user->id]) }}" class="btn btn-xs btn-info">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>@if(Auth::id() !== $user->id)
                                        <a href="{{ route('user.delete',['id' => $user->id]) }}" class="btn btn-xs btn-danger">
                                            <span class="glyphicon glyphicon-remove-sign"></span>
                                        </a>
                                    @endif</td>



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
