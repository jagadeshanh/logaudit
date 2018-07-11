@component('mail::message')
    # <i>{{ get_class($exception) }}</i>

<b>{{ \Carbon\Carbon::now() }}</b>

@component('mail::panel')
{{ $exception->getMessage() }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
