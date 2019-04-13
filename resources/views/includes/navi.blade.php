{{-- 
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
 
                    <li class="nav-item">
                        <a class="nav-link" href="#">text</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">text</a>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                        href="#" role="button" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false" v-pre>text</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">text</a>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</nav> --}}

<nav class="navi navi-bar">
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
</nav>
