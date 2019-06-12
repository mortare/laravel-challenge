@extends('layout.site')

@section('title','Events')

@section('content')
<div class="container">
  <h3 class="center">Add Events</h3>
  <div class="row">
    <form class="" action="{{route('admin.events.save')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('admin.events._form')
      <button class="btn deep-orange">Save</button>
    </form>
  </div>
</div>

@endsection
