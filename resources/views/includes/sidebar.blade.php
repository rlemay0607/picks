<div class="col-xs-12  col-md-4">

    <!-- Widget author -->
    <div class="widget-author  boxed  push-down-30">
        <div class="widget-author__image-container">
            <div class="widget-author__avatar--blurred">
                <img src="{{ asset(Auth::user()->avatar) }}" alt="Avatar image" width="90" height="90">
            </div>
            <img class="widget-author__avatar" src="{{ asset(Auth::user()->avatar) }}" alt="Avatar image" width="90" height="90">
        </div>
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1">
                <h4>{{ Auth::user()->team_name }}</h4>
                <p align="left">{{ Auth::user() -> name}}<br>
                {{ Auth::user() -> email}}<br>
                {{ Auth::user() -> phone}}<br>
                @if (Auth::user()-> options=='f')
                        Favorite
                    @elseif (Auth::user()-> options=='u')
                        Underdog
                @else
                    Random
                @endif
                </p>
                <form action="{{ route('user.profile') }}" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>


                    <div class="row">

                            <button type="button" class="btn btn-success disabled">Weekly Rankings <span class="badge"></span></button>
                            <button type="button" class="btn btn-success disabled">Season Rankings <span class="badge"></span></button>


                    </div>
                <br>


            </div>
        </div>
    </div>
    <div class="widget-author  boxed  push-down-30">
    <div class="row">

        <div class="col-xs-10  col-xs-offset-1">
            <div class="text-center">
                <h4>My Picks</h4>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Week #</th>
                    <th>Total Points</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td></td>
                    <td></td>

                </tr>

                </tbody>
            </table>

        </div>
    </div>
    </div>

</div>
