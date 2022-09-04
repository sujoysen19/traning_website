@component('mail::message')
# Hey this mail is came from enrollment form

The message details is here.

Name: {{$subjectData['name']}}

Email: {{$subjectData['email']}}

Phone: {{$subjectData['phone']}}

Course: {{$subjectData['course']}}

Thanks<br>
@endcomponent
