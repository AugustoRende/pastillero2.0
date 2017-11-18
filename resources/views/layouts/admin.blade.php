<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CASSARÁ</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        /* Show it is fixed to the top */
        body {
          padding-top: 4.5rem;
          padding-bottom: 1rem;
          background-image: url({{ asset('images/fondo.png')}});
        }

        .container {
          padding: 10px;
          background-color: #f9f9f9;
          border-radius: 5px;
        }

        .menu{
          background-color: #2972C6;
        }

        .table td {
          padding: 0.35rem;
        }
    </style>
  </head>
    <body>
        <section>
           <div id="app">
              <div class="container">
                @include('layouts.navbar')

                <!--div class="container"-->
                    @yield('content')
                <!--/div-->
              </div>
          </div>
        </section>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
