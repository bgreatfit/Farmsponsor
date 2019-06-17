@extends('layouts.dashboard')
@section('content')
    <section class="helpcenter-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h1 class="helpcenter__heading">Having Troubles ?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="helpcenter__img-wrap">
                        <img src="{{asset('img/dash-2.png')}}" alt="form illustration" class="helpcenter__img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="helpcenter__heading--secondary">
                        We are always here to help
                    </h2>
                    <p class="helpcenter__text">
                        Send us a mail at farmsponsponsorng@gmail.com 
                    </p>
                    <p class="helpcenter__text text-lg">OR</p>
                    <p class="helpcenter__text">Call our customer care hotline</p>
                    <p class="helpcenter__text">+ 234 703 196 0724</p>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="helpcenter__heading--secondary">Pay Us A Visit</h2>
                    <p class="helpcenter__text">16 Abua Close, Beside RCCG Zonal HQ,</p>
                    <p class="helpcenter__text">Rumuibekwe, Port Harcourt,</p>
                    <p class="helpcenter__text">Rivers State, Nigeria.</p>
                </div>
            </div>
        </div>
    </section>
@endsection