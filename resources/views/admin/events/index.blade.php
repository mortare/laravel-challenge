@extends('layout.site')

@section('title','Events')

@section('content')

<div class="container">
<h3 class="center">List of Events</h3>
<div class="row">
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registers as $register)
        <tr>
          <td>{{ $register->title }}</td>
          <td>{{ $register->description }}</td>
          <td>{{ $register->start_date }}</td>
          <td>{{ $register->end_date }}</td>
          <td>
            <a class="btn deep-orange" href="{{ route('admin.events.edit',$register->id) }}">Update</a>
            <a class="btn red" href="{{ route('admin.events.del',$register->id) }}">Delete</a> 
            <a class="btn deep-orange" href="#">Invite</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="row">
  <a class="btn blue" href="{{ route('admin.events.add') }}">Add Event</a>

</div>

</div>
@endsection
