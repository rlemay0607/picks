@component('mail::message', ['user' => $user])
# Weeks {{$settings->week_number}} picks are available


We have released week {{$settings->week_number}} picks.  Remember you have up to kick off to make changes to your picks.



@component('mail::button', ['url' => 'http://sports-now.org/picks/currentweek'])
    Enter Week {{$settings->week_number}} Picks
    @endcomponent

@endcomponent
