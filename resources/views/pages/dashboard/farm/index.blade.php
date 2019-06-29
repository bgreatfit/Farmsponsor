@extends('layouts.dashboard')

@section('content')
<section class="farmlist py-5 my-5">
    <div class="container">
        <div class="row">

            @foreach($farms as $farm)
            <div class="col-md-3 col-12 col-sm-8 mx-sm-auto mx-auto">
                <div class="content-wrap card-box">

                    <div class="farmlist__card">
                        <div class="farmlist__status">
                            <p class="farmlist__status--text">
                                @if($farm->due_date->lt(now()))
                                    Closed
                                @elseif($farm->hasExhaustedUnit())
                                    SoldOut
                                @elseif($farm->start_date->lt(now()))
                                    Open
                                @else
                                    Soon
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
                                            <p class="farmlist__returns text-md-right">{{$farm->returns}}%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <p class="farmlist__text">Start Date:</p>
                                            <p class="farmlist__sub-text mb-4">{{$farm->start_date->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <p class="farmlist__text">Due Date: </p>
                                            <p class="farmlist__sub-text mb-4">{{$farm->due_date->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="farmlist__sponsor">

                            @if($farm->due_date->lt(now()))
                                <a href="#" class="farmlist__sponsor-btn"> Closed  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>

                            @elseif($farm->hasExhaustedUnit())
                                <a href="#" class="farmlist__sponsor-btn"> Sold Out  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>

                            @elseif($farm->start_date->lt(now()))
                                <a href="{{route('farms.show', $farm->slug)}}" class="farmlist__sponsor-btn">Sponsor  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>
                            @else
                                <a href="#" class="farmlist__sponsor-btn"> Soon <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>

                            @endif

                        </div>
                    </div>
            </div>

            @endforeach
        </div>
    </div>
    {{$farms->links()}}
</section>
@endsection
