<x-mail::message>
{{-- TODO Day 11: design the email — greet the user, show task title, due date, link --}}
# Task Assigned

TODO Day 11 — populate this email template

<x-mail::button :url="''">
View Task
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>