@component('mail::message')
# Introduction

A new Election was just created on your account.

Find the necessary details for this election below.

Election Name: {{ $election->name }}
Join Code: {{ $election->join_code }}
Candidate Code: {{ $election->candidate_code }}

@component('mail::button', ['url' => route('dashboard')])
View activity
@endcomponent

May the best Winner win,<br>
{{ config('app.name') }}
@endcomponent
