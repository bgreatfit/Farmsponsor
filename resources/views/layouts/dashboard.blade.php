<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Farm Sponsor | Dashboard </title>
        {{-- fonts --}}
        <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">

        <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo" rel="stylesheet">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
        crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
        
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <main class="dashboard__pageWrap">
        {{-- @include('includes.dashboardNavi') --}}

        @yield('content')
        
        </main>




    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
    integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
    crossorigin="anonymous"> 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>