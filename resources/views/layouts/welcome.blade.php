<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{asset('css/foundation.min.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
      <div class="row">
        <div class="large-12 columns">
          <h1>Welcome to Foundation</h1>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <div class="callout">
            @yield('content')
        </div>
      </div>

      <script src="{{asset('js/vendor/jquery.js')}}"></script>
      <script src="{{asset('js/vendor/what-input.js')}}"></script>
      <script src="{{asset('js/vendor/foundation.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
