</<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Contacts</h1>

@foreach ($contacts as $contact)
<li> {{ $contact}}  </li>
@endforeach

<h1>Only Names Of Contacts</h1>

@foreach ($contacts as $contact)

<li> {{ $contact->name}}  </li>

@endforeach

<h1>Only Messages in Contacts</h1>

@foreach ($contacts as $contact)

<li> {{ $contact->message}}  </li>

@endforeach

</body>
</html>
