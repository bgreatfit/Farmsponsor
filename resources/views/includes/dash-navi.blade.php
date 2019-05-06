
<div class="col-md-3 col-sm-3 col-12">
    <div class="dashboard__navi-wrap">
        <ul class="dashboard__navi">
            <li class="dashboard__navi--item"><a href="{{url('/dashboard/farmlist')}}" class="dashboard__navi--link">Farm List</a></li>
            <li class="dashboard__navi--item"><a href="{{url('/dashboard/transactions')}}" class="dashboard__navi--link">Transactions</a></li>
            <li class="dashboard__navi--item"><a href="{{url('/dashboard/vestbanking')}}" class="dashboard__navi--link">VestBanking</a></li>
            <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">link4</a></li>
            <li class="dashboard__navi--item"><a href="{{url('/dashboard/help')}}" class="dashboard__navi--link">Help Center</a></li>
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