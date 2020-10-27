@component('mail::message')
# Name : {{ $data['name'] }}
# Email : {{$data['email']}}

# Requesting information about the event below
{{$data['event']}}

@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply Mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
