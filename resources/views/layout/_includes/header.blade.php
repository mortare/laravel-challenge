<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
  <nav>
   <div class="nav-wrapper deep-orange">
     <div class="container">
       <a href="#!" class="brand-logo">My Events</a>
       <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">
         <li><a href="/">Home</a></li>
         <li><a href="{{route('admin.events')}}">Events</a></li>
         <li><a href="{{route('site.login')}}">Login</a></li>
       </ul>
       <ul class="side-nav" id="mobile">
         <li><a href="/">Home</a></li>
         <li><a href="{{route('admin.events')}}">Events</a></li>
         <li><a href="{{route('site.login')}}">Login</a></li>
       </ul>
     </div>
   </div>
 </nav>
</header>
