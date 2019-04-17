
<nav class="navbar navbar-expand-md navbar-light navbar-laravel navi-bar">
    <div class="container-fluid">
        <a class="navbar-brand navi-bar__brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'laravel') }} --}}
        <img src="{{asset('img/fs-logo.png')}}" alt="Farmsponsor logo" class="navi-bar__picture">
        </a>

        <button class="navbar-toggler navi__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon navi__toggler--icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto navbar__navi">
 
                    <li class="nav-item navi__item">
                        <a class="nav-link navi__item--link" href="{{url('/about')}}">About us</a>
                    </li>
                    <li class="nav-item navi__item">
                        <a class="nav-link navi__item--link" href="{{url('/farmlist')}}">Farm List</a>
                    </li>
                    <li class="nav-item navi__item">
                        <a class="nav-link navi__item--link" href="#">VestBanking</a>
                    </li>
                    <li class="nav-item navi__item">
                        <a class="nav-link navi__item--link" href="https://farmsponsor.com.ng/latest-updates" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item navi__item">
                        <a class="nav-link navi__item--link" href="{{url('/gallery')}}">Gallery</a>
                        </li>
                    <li class="nav-item navi__item">
                        <a class="nav-link navi__item--link" href="#">FAQs</a>
                    </li>
                    <li class="nav-item navi__item dropdown">
                        <a id="navbarDropdown" class="nav-link navi__item--link dropdown-toggle" 
                        href="#" role="button" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false" v-pre>Account</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdown-item__link" href="{{url('/login')}}">Login</a>
                            <a class="dropdown-item dropdown-item__link" href="{{url('/register')}}">Register</a>
                        </div>
                        
                    </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <nav class="navi navi-bar">
    <div class="navi-content container">
        <a href="#" class="navi__logo-box">
        <img src="{{asset('img/fs-logo.png')}}" alt="Farmsponsor Logo" class="navi__logo">
        </a>

        <input type="checkbox" class="navi__menu-toggle" id="navi__menu-toggle">
        <label for="navi__menu-toggle" class="navi__menu-icon"></label>
        <ul class="navi__navigation navi__navigation-lg">
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">Home</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">About Us</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">Farm List</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">VestBanking</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">Blog</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">FAQs</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">Contact</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">Account</a>
            </li>
        </ul>
        <ul class="navi__navigation navi__navigation-sm">
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">link</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">link</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">link</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">link</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">link</a>
            </li>
            <li class="navi__navigation--item">
                <a href="#" class="navi__navigation--link">link</a>
            </li>
        </ul>
    </div>
</nav> --}}
