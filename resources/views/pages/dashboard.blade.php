@extends('layouts.dashboard')

@section('content')
    <section class="section-dashboard">
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
            <div class="content-wrap">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-12">
                        <div class="dashboard__navi-wrap">
                            <ul class="dashboard__navi">
                                <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">Farm List</a></li>
                                <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">Transactions</a></li>
                                <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">Help Center</a></li>
                                <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">link4</a></li>
                                <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">link5</a></li>
                                <li class="dashboard__navi--item"><a href="#" class="dashboard__navi--link">link6</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-12">
                        <div class="wrapper mt-md-5 mt-sm-5 pt-md-5 pt-sm-5 px-5">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="dashboard__content-wrap">
                                        <div class="dashboard__content"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="dashboard__content-wrap">
                                        <div class="dashboard__content"></div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection