@component('mail::message', ['user' => $user])
    # {{$user->team_name}} ({{$user->name}})


   This is a reminder that you are not paid in full for this years weekly NFL picks pool.
    Please make arrangements to pay the remaining balance of <span style="color:red"> **{{110 -$user->total_paid }}** </span> by one of the following methods:

<ol>
    <li>Contact Bobby at 518-235-6027 or <a href="rlemay1@msn.com" >rlemay1@msn.com</a></li>
    <li>Contact Ryan at 518-796-8987 or <a href="lemay.ryan@gmail.com" >lemay.ryan@gmail.com</a></li>
    <li>You can also transfer money using <a href="https://venmo.com/">Venmo</a>.  Please send the money to <b>ryan-lemay-6</b>. </li>
</ol>


@endcomponent