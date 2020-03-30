@component('mail::message')
# Rest Your Password

Thanks for using ecommerce

@component('mail::button', ['url' => aurl('reset/password/'.$data['token'])])
Rest Now
@endcomponent
Or <br>
Copy this link
<a href="{{aurl('reset/password/'.$data['token'])}}">
    {{aurl('reset/password/'.$data['token'])}}
</a>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
