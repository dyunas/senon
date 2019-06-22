<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Senon Insurance Adjusters &amp; Appraisers</title>

  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

  <!-- App css -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

  <!-- script -->
  <script src="{{ asset('js/modernizr.min.js') }}"></script>
</head>
<body>
  <div id="app">
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
