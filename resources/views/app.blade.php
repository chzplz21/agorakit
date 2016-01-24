<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8"/>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>{{env('APP_NAME')}}</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/yeti/bootstrap.min.css">
  <!-- other candidates include simplex and united yeti and flatly and paper-->

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- mobilizator specific css-->
  {!! Html::style('/css/all.css?v2') !!}

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  @yield('head')

</head>

<body>

  @include('partials.nav')

  <div class="container">
    @include('partials.errors')

    @yield('content')
  </div>



  @yield('footer')


</body>

</html>
