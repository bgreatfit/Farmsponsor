
<div class="col-md-3 col-sm-4 col-12">
    <div class="dashboard__navi-wrap">
        <label for="dashboard__navi--toggle" class="dashboard__navi--menu">
            <span class="menu-icon-container">
                <span class="dashboard__navi--menu-icon"></span>    
            </span>
        </label>
        <input type="checkbox" class="dashboard__navi--toggle" id="dashboard__navi--toggle">
        <ul class="dashboard__navi">
            <li class="dashboard__navi--item"><a href="{{route('dashboard')}}" class="dashboard__navi--link">Dashboard</a></li>
            <li class="dashboard__navi--item"><a href="{{route('farms.all')}}" class="dashboard__navi--link">Farm List</a></li>
            <li class="dashboard__navi--item"><a href="{{route('transactions.all')}}" class="dashboard__navi--link">Transactions</a></li>
            <li class="dashboard__navi--item"><a href="{{route('vestbanking')}}" class="dashboard__navi--link">VestBanking</a></li>
            <li class="dashboard__navi--item"><a href="{{url('/dashboard/payout')}}" class="dashboard__navi--link">Payout</a></li>
            <li class="dashboard__navi--item"><a href="{{route('dashboardHelpcenter')}}" class="dashboard__navi--link">Help Center</a></li>
            <li class="dashboard__navi--item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="dashboard__navi--link">{{ __('Logout') }}</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
       
    </div>
</div>
