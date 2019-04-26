
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
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                    href="#" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
 
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
                            <a class="dropdown-item dropdown-item__link" href="{{url('/login')}}">Login</a>
                            <a class="dropdown-item dropdown-item__link" href="{{url('/register')}}">Register</a>
                        </div>
                        
                    </li>
            </ul>
        </div>
    </div>
</nav>
