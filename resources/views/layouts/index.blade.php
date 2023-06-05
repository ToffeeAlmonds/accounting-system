<!DOCTYPE html>
<html lang="en">

<header class="row">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="{{ asset('assets/styles/adminlte.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/styles/icheck-bootstrap.min.css') }}" rel="stylesheet">
    <!-- icheck bootstrap -->
    <link href="{{ asset('assets/styles/all.min.css') }}" rel="stylesheet">
    <!-- Theme style -->

    @include('includes.head')
    @include('includes.header')
  </head>

</header>

<div id="main" class="row">
  @yield('content')

</div>
<!-- main ends-->

<footer class="row">
  <!-- jQuery -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
  @include('includes.footer')
</footer>

</body>

</html>