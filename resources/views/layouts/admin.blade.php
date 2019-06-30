<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Farmsponsor | Administrator </title>
            {{-- FAV ICON --}}
     <link rel="shortcut icon" type="image/png" href="img/favicon.png">
            {{-- fonts --}}
    <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
    <link rel="canonical" href="url()->current()" />

    <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

            {{-- Toastr --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="dashboard__pageWrap">
    @include('includes.admin-panel')

    <section class="section-dashboard container-fluid">
        <div class="content-wrap">
            <div class="row">
                @include('includes.admin-navi')
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
