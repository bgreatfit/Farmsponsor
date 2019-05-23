@extends('layouts.basic')

@section('content')
<section class="farmlist my-5 py-5">
    <div class="container">
        <div class="row">
            @foreach($farms as $farm)
                <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
                    <div class="content-wrap card-box">
                        <div class="farms__display card">
                            <a href="{{route('farms.show', $farm->slug)}}" class="card__info"> <img src="{{asset('img/Chick-2.jpg')}}" alt="hen image"
                                    class="farms__image card-img"></a>
                            <h3 class="heading__tertiary card__heading text-center">{{$farm->name}} </h3>
                            <div class="farms__text ">
                                <p>Farm cycle: {{$farm->start_date->format('jS F')}} to {{$farm->due_date->format('jS F')}}</p>
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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
