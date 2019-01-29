@component('mail::message', ['user' => $user])
    <b>Super Bowl Picks are available</b>




@component('mail::button', ['url' => 'http://sports-now.org'])

    Enter your picks
    @endcomponent

@endcomponent
