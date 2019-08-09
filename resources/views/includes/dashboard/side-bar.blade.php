<div class="dashboard-side-bar">
    <ul class="dashboard-side-bar__nav">
        <li class="active">
            <a href="#" class="nav-link">
                <span><img src="{{asset('img/dashboard-home.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                <span class="nav-link__text">Dashboard</span> 
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <span><img src="{{asset('img/dashboard-farmlist.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                <span class="nav-link__text">Farmlist</span>    
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <span><img src="{{asset('img/dashboard-transactions.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                <span class="nav-link__text">Transactions</span> 
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <span><img src="{{asset('img/dashboard-vestbanking.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                <span class="nav-link__text">Vestbanking</span>   
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                <span><img src="{{asset('img/dashboard-helpcenter.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                <span class="nav-link__text">Helpcenter</span>   
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="nav-link">
                <span><img src="{{asset('img/dashboard-logout.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                <span class="nav-link__text">Logout</span> 
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>