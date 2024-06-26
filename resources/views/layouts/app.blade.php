<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TO Do App</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  @include('libraries.style')


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


        @include('components.top-nav')

       @if(Auth::check() && Auth::user()->role == 'admin')

             @include('components.admin-left-sidebar')

        @else

             @include('components.user-left-sidebar')

        @endif






    @yield('content')

@stack('scripts')

@include('libraries.script')
</body>
</html>
