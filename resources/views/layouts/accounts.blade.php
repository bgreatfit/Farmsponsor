<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Farmsponsor</title>
            {{-- FAV ICON --}}
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
            {{-- fonts --}}
    <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo|Lato:100i|Kalam|Montserrat|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 
            {{-- sweet alert --}}
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
            {{-- toastr  --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
    
</head>
<body>
    @include('includes.navigation')

    <section class="section-form container-fluid">
        @yield('content')
    </section>
    @include('includes.footer')
    @include('includes.scripts')
</body>
</html>