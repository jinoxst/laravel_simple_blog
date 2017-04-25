@component('mail::message')
# Introduction

Thanks so much for registring.

@component('mail::button', ['url' => 'https://laracasts.com'])
Starting browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote to go here. :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
