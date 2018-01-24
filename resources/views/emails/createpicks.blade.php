@component('mail::message', ['user' => $user])
Super Bowl picks are available


We have released week the Super Bowl picks.  We will be paying out $500 to the winners this week.




@component('mail::button', ['url' => 'http://sports-now.org/picks/currentweek'])

    Enter Week Super Bowl Picks
    @endcomponent

@endcomponent
