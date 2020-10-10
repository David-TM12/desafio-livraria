<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('titulo')</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">LivrariaOnline</a>
        </div>
      </nav>

    <div class="container">
        @yield('conteudo')
    </div>
    


  <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>