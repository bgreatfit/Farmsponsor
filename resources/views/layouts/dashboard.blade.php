<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Farmsponsor | Dashboard </title>
            {{-- FAV ICON --}}
     <link rel="shortcut icon" type="image/png" href="img/favicon.png">
            {{-- fonts --}}
    <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
    <link rel="canonical" href="url()->current()" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo|Lato:100i|Kalam|Montserrat|Roboto|Montserrat:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            
            {{-- Toastr  --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

            {{-- Style --}}
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">

        {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


</head>

<body>
    <div class="dashboard__pageWrap">
    @include('includes.dash-panel')

    <section class="section-dashboard container-fluid">
        <div class="content-wrap">
            <div class="row">
                @include('includes.dash-navi')
                <div class="col-md-9 col-sm-8 col-12">
                    @include('includes.alerts')
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    </div>
    @include('includes.scripts')


</body>
</html>
