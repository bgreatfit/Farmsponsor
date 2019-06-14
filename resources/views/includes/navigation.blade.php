<div class="navigation-main">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navigation-bar">
            <div class="container-fluid">
                <a class="navbar-brand navi-bar__brand" href="{{ url('/') }}">
                    <img src="{{asset('img/farmsponsor-logo.svg')}}" alt="Farmsponsor logo" class="navi-bar__picture">
                </a>
        
                <button class="navbar-toggler navi__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon navi__toggler--icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navigation-menu">
                        <!-- Authentication Links -->
        
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="{{route('about')}}">About us</a>
                            </li>
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="{{route('farmlist')}}">Farm List</a>
                            </li>
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="{{route('aboutVestbanking')}}">VestBanking</a>
                            </li>
                            <li class="nav-item navigation__item dropdown">
                                <a id="navbarDropdown" class="nav-link navigation__item--link dropdown-toggle"
                                href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>Get help</a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item__link" href="{{ route('login') }}">FAQs</a>
                                    <a class="dropdown-item dropdown-item__link" href="{{ route('register') }}">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="https://farmsponsor.com.ng/latest-updates" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item navigation__item mr-md-5">
                                <a a class="nav-link navigation__item--link nav-link-signUp" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                            </li>
                            <li class="nav-item navigation__item">
                                <a a class="nav-link navigation__item--link nav-link-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

