@component('mail::message')
# Introduction

The body of your message.


- one
- two

@component('mail::button', ['url' => 'http://getriuh.com'])
Start Browsing
@endcomponent


@component('mail::pabel', ['url' => ''])
Lorem ipsum dolar sit amet.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
