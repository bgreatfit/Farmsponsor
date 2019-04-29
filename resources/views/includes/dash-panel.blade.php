{{-- <nav class="navbar">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="dashboard__panel-wrap">
                <div class="dashboard__panel">
                    <a href="#" class="dashboard__brand">Farmsponsor</a>
                    <a href="#" class="dashboard__profile ml-auto">profile</a>
                </div>
            </div>
        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-md navbar-light navbar-laravel dashboard__panel">
    <div class="container-fluid">
        <a href="#" class="dashboard__brand">Farmsponsor</a>
        <a href="{{url('/dashboard/profile')}}" class="dashboard__profile ml-auto">profile</a>
    </div>
</nav>