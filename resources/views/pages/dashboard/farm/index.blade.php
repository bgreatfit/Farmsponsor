@extends('layouts.dashboard')

@section('content')
<section class="farmlist py-5 my-5">
    <div class="container">
        <div class="row">

            @foreach($farms as $farm)
            <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                <div class="content-wrap card-box">
                    {{-- OLD FARM CARD --}}
                    {{-- <div class="farms__display card">
                        <a href="{{route('farms.show', $farm->slug)}}" class="card__info"> 
                            <img src="{{asset($farm->avatar)}}" alt="hen image" class="farms__image card-img">
                        </a>
                        <h3 class="heading__tertiary card__heading text-center">{{$farm->name}} </h3>
                        <div class="farms__text ">
                            <p>Farm cycle: {{$farm->start_date->format('jS F')}} to {{$farm->due_date->format('jS F')}}
                            </p>
                            <p>{{$farm->returns}}% Returns</p>
                        </div>
                        <div class="card__progress-bar"> </div>
                        <a href="{{route('farms.show', $farm->slug)}}" class="farms__btn btn-lg">Sponsor Now</a>
                        <p class="farms__text farms__text--status {{$farm->isOpen() ? 'bg-primary': 'bg-danger'}}">
                            @if($farm->isOpen())
                            Open
                            @else
                            Closed
                            @endif
                        </p>
                    </div> --}}

                    <div class="farmlist__card">
                        <div class="farmlist__status {{$farm->isOpen() ? 'bg-light': 'bg-danger'}}">
                            <p class="farmlist__status--text ">
                                @if($farm->isOpen())
                                Open
                                @else
                                Closed
                                @endif
                            </p>
                        </div>
                        <div class="farmlist__card-body">
                            <div class="farmlist__card-body--image-wrap">
                                <img src="{{asset('img/farmcard-pic1.svg')}}" alt="Custom photo for farm cycle" class="farmlist__card-body--image">
                            </div>
                            <div class="farmlist__card-body--text-wrap">
                                <div class="container-block">
                                    <div class="flex-row">
                                        <div class="flex-col-2">
                                            <p class="farmlist__text">Farm Cycle:</p>
                                            <p class="farmlist__sub-text mb-5">{{$farm->name}}</p>
                                        </div>
                                        <div class="flex-col-2">
                                            <p class="farmlist__text text-md-right">Returns</p>
                                            <p class="farmlist__returns text-md-right">15%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <p class="farmlist__text">Start Date:</p>
                                            <p class="farmlist__sub-text mb-4">
                                                {{$farm->start_date->format('jS F')}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <p class="farmlist__text">Due Date: </p>
                                            <p class="farmlist__sub-text">
                                                {{$farm->due_date->format('jS F')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="farmlist__sponsor">
                            <a href="{{route('farms.show', $farm->slug)}}" class="farmlist__sponsor-btn">Sponsor  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
@endsection
