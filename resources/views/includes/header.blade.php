<header class="header  push-down-45">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#readable-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="navbar  navbar-default" role="navigation">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse  navbar-collapse" id="readable-navbar-collapse">
                <ul class="navigation">
                    <li> <a href="{{ route('index') }}">Home</a> </li>


                    @if (Auth::user()-> admin=='1')
                        <li> <a href="{{ route('home') }}">Admin</a> </li>
                    @endif
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>


                </ul>


            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
</header>



