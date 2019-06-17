<!DOCTYPE html>
<html>
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

</head>
<body>
    @include('includes.navigation')

    <section class="container-fluid">
        @yield('content')
    </section>
    @include('includes.footer')
    @include('includes.scripts')
</body>
</html>
