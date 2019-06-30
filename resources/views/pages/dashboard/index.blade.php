@extends('layouts.dashboard')

@section('content')
    @include('includes.balance')
    <div class="wrapper pt-md-5 pt-sm-5 px-5">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="dashboard__content-wrap">
                    <div class="dashboard__content">
                        <div class="dashboard__welcome ">
                            <img src="{{asset('img/dash-1.png')}}" alt="" class="dashboard__welcome--image">
                        </div>
                        <h1 class="dashboard__welcome--heading ">Welcome To Farmsponsor</h1>

                        <div class="dashboard__sponsor-cta">
                            <div class="row">
                                <div class="col-12 col-md-12 text-center">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <a href="{{route('farms.all')}}" class="dashboard__sponsor-cta--btn mb-3">Sponsor a farm</a>
                                        </div>
                                        {{-- <div class="col-md-7 col-sm-12 col-12">
                                             <a href="#" class="dashboard__sponsor-cta--btn">Request for sponsorship</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
