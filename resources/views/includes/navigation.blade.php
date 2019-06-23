<div class="navigation-main">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navigation-bar">
            <div class="container-fluid">
                <a class="navbar-brand navi-bar__brand" href="{{ url('/') }}">
                    <img src="{{asset('img/farmsponsor-logo.svg')}}" alt="Farmsponsor logo" class="navi-bar__picture">
                </a>

                <button class="navbar-toggler navigation__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon navigation__toggler--icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navigation-menu">
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
                                    <a class="dropdown-item dropdown-item__link" href="{{ route('faq') }}">FAQs</a>
                                    <a class="dropdown-item dropdown-item__link" href="#">Help Center</a>
                                </div>
                            </li>
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="https://farmsponsor.com.ng/latest-updates" target="_blank">Blog</a>
                            </li>
                            @auth
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="{{route('dashboard')}}">Dashboard</a>
<<<<<<< HEAD
=======
                            </li>

                            <li class="nav-item navigation__item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link navigation__item--link nav-link-btn">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
>>>>>>> 89a14d22e89b86f32aa403f54dfa62d4659cb02a
                            </li>
                            @else
                            <li class="nav-item navigation__item">
                                <a a class="nav-link navigation__item--link nav-link-signUp" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                            </li>
                            <li class="nav-item navigation__item">
                                <a a class="nav-link navigation__item--link nav-link-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>

