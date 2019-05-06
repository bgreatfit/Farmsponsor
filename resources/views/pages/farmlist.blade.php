@extends('layouts.basic')

@section('content')
<section class="farmlist">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>

                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>

                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>

                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>

                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>

                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>

                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    @include('includes.farmsCard')
                </div>
            </div>
        </div>
</section>
@endsection