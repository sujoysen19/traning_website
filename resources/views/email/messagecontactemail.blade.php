@component('mail::message')
# Here is a contact message

The message details is here.

Name: {{$msgMail['name']}}

Email: {{$msgMail['email']}}

Subject: {{$msgMail['subject']}}

Message: {{$msgMail['msg']}}


Thanks<br>
@endcomponent
