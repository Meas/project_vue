<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Vue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('/css/fcss2.css') }}" rel="stylesheet" type="text/css" media="screen"/>
         <!-- <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="screen"/> -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" media="screen"/>
       <!--  <link href="{{ asset('assets/sass/app.scss') }}" rel="stylesheet" type="text/css" media="screen"/>  -->

        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="http://code.jquery.com/jquery.js"></script>

        @yield('header')
    </head>
    <body>
        @yield('body')
    </body>
</html>
