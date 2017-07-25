<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Readable - HTML Template</title>

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

<!-- header -->
@include('includes.header')
<!-- Search - Open panel -->
<div class="search-panel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form action="search-results.html">
                    <input type="text" class="search-panel__form  js--search-panel-text" placeholder="Begin typing for search">
                    <p class="search-panel__text">Press enter to see results or esc to cancel.</p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">



            <!-- Post with featured image -->
                <div class="boxed  sticky  push-down-45">

                    <!-- Featured image and meta start -->
                    <div class="meta">
                        <img class="wp-post-image" src="{{ asset($post->featured) }}" alt="{{ $post->title }}" width="748" height="324">
                        <div class="meta__container">
                            <div class="row">
                                <div class="col-xs-12  col-sm-8">
                                    <div class="meta__info">
                                        <span class="meta__author"><img src="{{ asset($profile->avatar) }}" alt="Meta avatar" width="30" height="30"> <a href="#">{{ $user->name }}</a> in <a href="#">{{ $post->category->name }}</a> </span>
                                        <span class="meta__date"><span class="glyphicon glyphicon-calendar"></span>  &nbsp; {{ $post->created_at->format('F d Y') }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Featured image and meta end -->
                    <div class="sticky__box">
                        <span class="sticky__circle"></span>
                        <span class="sticky__circle"></span>
                        <span class="sticky__circle"></span>
                        <span class="sticky__circle"></span>
                    </div>

                    <!-- Start of the blogpost -->

                    <div class="row">

                        <div class="col-xs-10  col-xs-offset-1">


                            <!-- Start of the content -->
                            <div class="post-content--front-page">
                                <h2 class="front-page-title">
                                    <a href="single-post.html">{{ $post->title }}</a>
                                </h2>

                                <p>{!! $post->details !!}</p>

                            </div>

                            <!-- End of the content -->

                        </div>

                    </div>

                </div>





    </div>
</div>
@include('includes.footer')
</body>
</html>