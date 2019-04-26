@extends('layouts.dashboard')

@section('content')
    {{-- <p class="balance__text"><a href="#" class="balance__link">0.00NGN</a></p> --}}
    @include('includes.balance')

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
@endsection