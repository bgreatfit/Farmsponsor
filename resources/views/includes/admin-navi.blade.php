<div class="col-md-3 col-sm-4 col-12">
        <div class="dashboard__navi-wrap">
            <label for="dashboard__navi--toggle" class="dashboard__navi--menu text-center"> &#9776;</label>
            <input type="checkbox" class="dashboard__navi--toggle" id="dashboard__navi--toggle">
            <ul class="dashboard__navi">
                <li class="dashboard__navi--item"><a href="{{url('/admin/farmingcycle')}}" class="dashboard__navi--link">Farming Cycles</a></li>
                {{-- <li class="dashboard__navi--item"><a href="{{url('/admin/transactions')}}" class="dashboard__navi--link">Transactions</a></li> --}}
                <li class="dashboard__navi--item"><a href="{{asset('admin/deposit-requests')}}" class="dashboard__navi--link">Deposit Requests</a></li>
                <li class="dashboard__navi--item"><a href="{{asset('admin/withdrawal-requests')}}" class="dashboard__navi--link">Withdrawal Requests</a></li>
                {{-- <li class="dashboard__navi--item"><a href="{{url('/admin/help')}}" class="dashboard__navi--link">Help Center</a></li> --}}
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