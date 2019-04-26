@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.dashboard')

@section('content')
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
                    <div class="dashboard__content">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection --}}
