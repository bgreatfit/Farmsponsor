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

                            <li class="nav-item navigation__item dropdown">
                                <a id="navbarDropdown" class="nav-link navigation__item--link dropdown-toggle"
                                href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>Company</a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item__link" href="{{route('about')}}">
                                        <img src="{{asset('img/nav-icon-about.svg')}}" alt="a square with exclamation mark within" class="dropdown-link-icon">  About
                                    </a>
                                    <a class="dropdown-item dropdown-item__link" href="#">
                                        <img src="{{asset('img/nav-icon-team.svg')}}" alt="Team icon font" class="dropdown-link-icon">Team
                                    </a>
                                    <a class="dropdown-item dropdown-item__link" href="#" target="_blank">
                                        <img src="{{asset('img/nav-icon-blog.svg')}}" alt="a vector illustration" class="dropdown-link-icon">Blog
                                    </a>
                                    
                                </div>
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
                                    <a class="dropdown-item dropdown-item__link" href="mailto:farmsponsorng@gmail.com">Contact</a>
                                    <a class="dropdown-item dropdown-item__link" href="{{route('helpcenter')}}">Help Center</a>
                                </div>
                            </li>
                            
                            @auth
                            <li class="nav-item navigation__item">
                                <a class="nav-link navigation__item--link" href="{{route('dashboard')}}">Dashboard</a>
                            </li>

                            <li class="nav-item navigation__item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link navigation__item--link nav-link-btn">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
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

