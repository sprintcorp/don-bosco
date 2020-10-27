@component('mail::message')
# Name : {{ $data['firstname'] }} {{ $data['lastname'] }}
# Email : {{$data['email']}}

# Message
{{$data['message']}}

@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply Mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
