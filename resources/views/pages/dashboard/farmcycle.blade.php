@extends('layouts.dashboard')

@section('content')
    <div class="farmcycle-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="farmcycle-content">
    
                        <div class="farmcycle__ruler">
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
                                        <h1 class="farmcycle__heading">
                                            farmcycle Information
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="farmcycle__information">
                                            <h2 class="farmcycle__farm-cycle">20th Farm cycle</h2>
                                            <p class="farmcycle__sponsored">
                                                Number of units available: <span class="farmcycle__sponsored--span">5000</span>
                                            </p>
                                            <p class="farmcycle__date">
                                                Window duration: <span class="farmcycle__date--span">29th May 2019 - 16th June 2019</span>
                                            </p>
                                            <p class="farmcycle__interest">farmcycle interest: <span class="farmcycle__date--span">15%</span></p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="farmcycle__ruler">
                            <hr>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
                
    </div>
@endsection