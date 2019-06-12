@extends('layout.site')

@section('title','Events')

@section('content')
<div class="container">
  <h3 class="center">Edit Events</h3>
  <div class="row">
    <form class="" action="{{route('admin.events.update', $register->id)}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      @include('admin.events._form')
      <button class="btn deep-orange">Update</button>
    </form>
  </div>
</div>

@endsection
