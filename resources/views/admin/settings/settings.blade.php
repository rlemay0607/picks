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
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Year</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="year">

                        <option value="2017" @if ($settings->year=='2017') selected @endif>2017</option>
                        <option value="2018" @if ($settings->year=='2018') selected @endif>2018</option>
                        <option value="2019" @if ($settings->year=='2019') selected @endif>2019</option>
                        <option value="2020" @if ($settings->year=='2020') selected @endif>2020</option>
                        <option value="2021" @if ($settings->year=='2021') selected @endif>2021</option>
                        <option value="2022" @if ($settings->year=='2022') selected @endif>2022</option>
                        <option value="2023" @if ($settings->year=='2023') selected @endif>2023</option>
                        <option value="2024" @if ($settings->year=='2024') selected @endif>2024</option>
                        <option value="2025" @if ($settings->year=='2025') selected @endif>2025</option>

                    </select>
                </div>

                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Week</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="week_number">

                        <option value="1" @if ($settings->week_number=='1') selected @endif>1</option>
                        <option value="2" @if ($settings->week_number=='2') selected @endif>2</option>
                        <option value="3" @if ($settings->week_number=='3') selected @endif>3</option>
                        <option value="4" @if ($settings->week_number=='4') selected @endif>4</option>
                        <option value="5" @if ($settings->week_number=='5') selected @endif>5</option>
                        <option value="6" @if ($settings->week_number=='6') selected @endif>6</option>
                        <option value="7" @if ($settings->week_number=='7') selected @endif>7</option>
                        <option value="8" @if ($settings->week_number=='8') selected @endif>8</option>
                        <option value="9" @if ($settings->week_number=='9') selected @endif>9</option>
                        <option value="10" @if ($settings->week_number=='10') selected @endif>10</option>
                        <option value="11" @if ($settings->week_number=='11') selected @endif>11</option>
                        <option value="12" @if ($settings->week_number=='12') selected @endif>12</option>
                        <option value="13" @if ($settings->week_number=='13') selected @endif>13</option>
                        <option value="14" @if ($settings->week_number=='14') selected @endif>14</option>
                        <option value="15" @if ($settings->week_number=='15') selected @endif>15</option>
                        <option value="16" @if ($settings->week_number=='16') selected @endif>16</option>
                        <option value="17" @if ($settings->week_number=='17') selected @endif>17</option>
                        <option value="18" @if ($settings->week_number=='18') selected @endif>Wildcard</option>
                        <option value="19" @if ($settings->week_number=='19') selected @endif>Divisional</option>
                        <option value="20" @if ($settings->week_number=='20') selected @endif>Championship</option>
                        <option value="21" @if ($settings->week_number=='21') selected @endif>Super Bowl</option>

                    </select>
                </div>

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
Season Payout
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="season_payout" id="options1" value="0" @if ($settings->season_payout=='0') checked @endif>
                                    No
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="season_payout" id="options2" value="1" @if ($settings->season_payout=='1') checked @endif>
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