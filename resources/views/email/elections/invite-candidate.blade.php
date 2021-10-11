@component('mail::message')
# Invitation to contest

You've been invited to contest in the {{ $election->name }} election as {{ $candidate->position }}. Please click the
button below to accept this Invitation and proceed to complete your profile, otherwise, disregard this email.

Below are your login details to complete your profile.

Email : {{ $candidate->email }}
Candidate code: {{ $election->candidate_code }}

@component('mail::button', ['url' => $url])
Accept
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
