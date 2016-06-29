<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Laravel</title>

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/sweetalert.css') }}">

  </head>
  <body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="{!! URL('/') !!}" class="navbar-brand">Laravel</a>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" class="active">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield

  <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>

  </body>
</html>
