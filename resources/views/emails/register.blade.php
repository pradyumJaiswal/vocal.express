@component('mail::message')

<p>hello {{$user->name}}</p>
@component('mail::button',['url'=>url('verify/'.$user->remember_token)])
Verify
@endcomponent
    <p>kaisa hai bidu</p>
Thanks <br/>
{{config('aap.name')}}
@endcomponent