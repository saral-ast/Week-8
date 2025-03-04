<x-mail::message>
# Introduction

Congrates Your JOb is live on Website

<x-mail::button :url="url('/jobs/' . $job->id)">

     View Job
</x-mail::button>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
