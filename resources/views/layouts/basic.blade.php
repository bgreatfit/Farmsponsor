<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Farmsponsor | Nigeria's Number One Agri-Tech Platform</title>
            {{-- FAV ICON --}}
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

            {{-- fonts --}}
        <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo|Lato:100i|Kalam|Montserrat|Roboto|Montserrat:700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

            {{-- Toastr --}}
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
    </head>
    <body>
      @include('includes.navigation')
      
      @include('includes.alerts')

      @yield('content')

      @include('includes.footer')
{{--      {!! TidioChat::js() !!}--}}

    </body>
    @include('includes.scripts')
</html>
