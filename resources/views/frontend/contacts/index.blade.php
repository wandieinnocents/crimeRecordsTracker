@extends('frontend.layout')
@section('title',"Contacts")
@section('content')


<br>
<br>
<center>
<div class="page-header">
    <h1>CONTACT INFORMATION</h1>
  </div>
</center>
<br>
<br>

<div class="">

  <table class="table table-dark table-stripped "  style="padding:30px;">
    <thead style="background-color:brown;">
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Name</th>
        <th scope="col" > Phone</th>
        <th scope="col"> Email</th>
        <th scope="col"> Message</th>
      </tr>
    </thead>

    <!-- table content -->
    <tbody>
      @foreach($contacts as $contact)
      <tr>


        <th scope="row" style="background-color:brown;">{{ $contact->id }}</th>
        <td >{{ $contact->name }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->message }}</td>



      </tr>
      @endforeach

    </tbody>

    <!-- end of table content -->
  </table>

</div>


@endsection
