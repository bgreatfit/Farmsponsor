
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
                <!-- Authentication Links -->
 
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
                        <a class="nav-link navi__item--link" href="{{url('/faq')}}">FAQs</a>
                    </li>

                    <li class="nav-item navi__item dropdown">
                        <a id="navbarDropdown" class="nav-link navi__item--link dropdown-toggle" 
                        href="#" role="button" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false" v-pre>Account</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdown-item__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="dropdown-item dropdown-item__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                        
                    </li>
            </ul>
        </div>
    </div>
</nav>
