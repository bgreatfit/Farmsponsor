<div class="col-md-3 col-sm-4 col-12">
        <div class="dashboard__navi-wrap">
            <label for="dashboard__navi--toggle" class="dashboard__navi--menu text-center"> <span class="hamburger__icon">&#9776;</span></label>
            <input type="checkbox" class="dashboard__navi--toggle" id="dashboard__navi--toggle">
            <ul class="dashboard__navi">
                <li class="dashboard__navi--item"><a href="{{route('admin.farmcycles')}}" class="dashboard__navi--link admin">Farming Cycles</a></li>
                <li class="dashboard__navi--item"><a href="{{route('admin.bankdeposits')}}" class="dashboard__navi--link admin">Deposit Requests</a></li>
                <li class="dashboard__navi--item"><a href="{{route('admin.withdrawals')}}" class="dashboard__navi--link admin">Withdrawal Requests</a></li>
                <li class="dashboard__navi--item"><a href="{{route('usersList')}}" class="dashboard__navi--link admin">Users List</a></li>
                <li class="dashboard__navi--item"><a href="{{route('retainSponsorship')}}" class="dashboard__navi--link admin">Retained Sponsorships</a></li>
                <li class="dashboard__navi--item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dashboard__navi--link admin">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
</div>
