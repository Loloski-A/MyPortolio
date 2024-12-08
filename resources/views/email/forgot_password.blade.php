Hello {{ $user->name }},

<br>

Your new login password is :- <b> {{ $user->password_random}} </b>

<br>

Thank you,<br>

{{ config('app.name')}}
