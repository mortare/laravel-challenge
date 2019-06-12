@extends('layout.site')

@section('title','Events')

@section('content')
<div class="container">
  <h3 class="center">Login</h3>
  <div class="row">
    <form class="" action="{{route('site.login.enter')}}" method="post">
      {{ csrf_field() }}
      <div class="input-field">
        <input type="text" name="email">
        <label>E-mail</label>
      </div>
      <div class="input-field">
        <input type="password" name="password">
        <label>Password</label>
      </div>
      <button class="btn deep-orange">Login</button>
    </form>
  </div>
</div>

@endsection
