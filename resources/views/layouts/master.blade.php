<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Google Recaptcha</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{elixir('css/app.css')}}">
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Google Recaptcha</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="{{ url('contact') }}">contact</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @yield('content')
    </div>
</main>


</body>
</html>