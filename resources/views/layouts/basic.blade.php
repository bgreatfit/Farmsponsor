<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Farm Sponsor</title>
        {{-- fonts --}}
        <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">

        <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo" rel="stylesheet">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
        crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}"> --}}
        
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        @include('includes.navi')

        @yield('content')

        @include('includes.footer')

            {{-- J QUERY --}}
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
                integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
                crossorigin="anonymous"> 
        </script>
            {{-- POPPER. JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
                crossorigin="anonymous">
        </script>
            {{-- BOOTSTRAP --}}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous">
        </script>
            <!-- NUMBER COUNT UP JQUERY -->
        <script src="{{asset('js/jquery.easy_number_animate.min.js')}}"></script>

        <script>
            $('.sponsor').easy_number_animate({
            start_value: 0,
            end_value: 1000,
            duration: 2000,
            delimiter: ','
              });
          
            $('.cycle').easy_number_animate({
            start_value: 0,
            end_value: 18,
            duration: 2000,
            delimiter: ','
              });
          
              $('.farms').easy_number_animate({
            start_value: 0,
            end_value: 50,
            duration: 2000,
            delimiter: ','
              });
          
              $('.farmers').easy_number_animate({
            start_value: 0,
            end_value: 300,
            duration: 2000,
            delimiter: ','
              });
          
              $('.reviews').easy_number_animate({
            start_value: 0,
            end_value: 100,
            duration: 2000,
            delimiter: ','
              });
        </script>
          
    </body>
</html>
