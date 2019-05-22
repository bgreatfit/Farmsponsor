@extends('layouts.dashboard')

@section('content')
    @include('includes.balance')

    <div class="farmcycle-wrap mt-2 pt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="farmcycle-content">

                        <div class="farmcycle__ruler my-5">
                            <hr>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <div class="farmcycle__image-box">
                                    <img src="{{asset('img/Chick-2.jpg')}}" alt="photo of farm cycle" class="farmcycle__image">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="farmcycle__heading mb-5">
                                            Farm Cycle Information
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="farmcycle__information">
                                            <h2 class="farmcycle__cycle-title mb-4">{{$farm->name}}</h2>
                                            <p class="farmcycle__units mb-4">
                                                Number Of Units Available: <span class="farmcycle__span">{{$farm->units}}</span>
                                            </p>
                                            <p class="farmcycle__date mb-4">
                                                Window Duration: <span class="farmcycle__span">{{$farm->start_date->format('jS F')}} to {{$farm->due_date->format('jS F')}}</span>
                                            </p>
                                            <p class="farmcycle__interest mb-4">Farmcycle Interest: <span class="farmcycle__span">{{$farm->returns}}%</span></p>

                                            <div class="row mb-4">
                                                <div class="col-12 col-md-6">
                                                    <a href="#" data-toggle="modal" data-target="#sponsor-farmcycle" role="button" class="farmcycle__cta form-control btn btn-lg btn-success">Sponsor Now</a>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="btn-box py-3 py-md-0">
                                                     <a href="{{route('farms.all')}}" class=" btn form-control btn-lg btn-info ml-auto">back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="farmcycle__ruler my-5">
                            <hr>
                        </div>

                        <div class="farmcycle__popup">
                            <div class="modal fade" id="sponsor-farmcycle" tabindex="-1" role="dialog" aria-labelledby="sponsor-farmcycleTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">Sponsor Farm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">X</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="sponsor-farmcycle__form--text mb-3 text-center">How many units would you like to sponsor?</p>
                                        <form action="{{route('farms.sponsor', $farm->slug)}}" method="POST"                               class="sponsor-farmcycle__form">
                                                @csrf
                                                <div class="form-group mt-3">
                                                    <input type="number" name="unit" id="unit"
                                                    class="form-control sponsor-farmcycle__form--input {{ $errors->has('unit') ? ' is-invalid' : '' }}">
                                                    <label for="unit" class="sponsor-farmcycle__form--label">
                                                        <small>a unit is N100,000 </small>
                                                    </label>
                                                    @if ($errors->has('unit'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('unit') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-secondary sponsor-farmcycle__btn btn-lg mr-3" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="sponsor-farmcycle__btn btn btn-lg btn-success">Sponsor Farm</button>
                                                </div>
                                            </form>
                                        </div>
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
