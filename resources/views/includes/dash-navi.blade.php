
<div class="col-md-3 col-sm-4 col-12">
    <div class="dashboard__navi-wrap">
        <label for="dashboard__navi--toggle" class="dashboard__navi--menu">
            <span class="menu-icon-container">
                <span class="dashboard__navi--menu-icon"></span>    
            </span>
        </label>
        <input type="checkbox" class="dashboard__navi--toggle" id="dashboard__navi--toggle">
        <ul class="dashboard__navi">
            <li class="dashboard__navi--item"><a href="{{route('dashboard')}}" class="dashboard__navi--link">
                <i class="fas fa-home dashboard__icon"></i>Dashboard</a>
            </li>
            <li class="dashboard__navi--item navi__item--profile"><a href="{{route('user.profile')}}" class="dashboard__navi--link">
                <i class="fas fa-user dashboard__icon"></i>Profile</a>
            </li>
            <li class="dashboard__navi--item"><a href="{{route('farms.all')}}" class="dashboard__navi--link">
                <i class="fas fa-tractor dashboard__icon"></i>Farm List</a>
            </li>
            <li class="dashboard__navi--item"><a href="{{route('transactions.all')}}" class="dashboard__navi--link">
                <i class="fas fa-calendar-check dashboard__icon"></i>Transactions</a></li>
            <li class="dashboard__navi--item"><a href="{{route('vestbanking')}}" class="dashboard__navi--link">
                <i class="fas fa-university dashboard__icon"></i>VestBanking</a></li>
            <li class="dashboard__navi--item"><a href="{{url('/dashboard/payout')}}" class="dashboard__navi--link">
                <i class="far fa-credit-card dashboard__icon"></i>Payout</a></li>
            <li class="dashboard__navi--item"><a href="{{route('helpcenter')}}" class="dashboard__navi--link">
                <i class="fas fa-question-circle dashboard__icon"></i>Help Center</a></li>
            <li class="dashboard__navi--item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="dashboard__navi--link">
                    <i class="fas fa-sign-out-alt dashboard__icon"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
       
    </div>
</div>
