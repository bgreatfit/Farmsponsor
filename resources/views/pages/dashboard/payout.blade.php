@extends('layouts.dashboard')

@section('content')
    <div class="payout-wrap my-5 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="payout-content">
                        <h1 class="payout__heading text-center mb-4">Payouts</h1>

                        <div class="payout__ruler mb-4">
                            <hr>
                        </div>

                        <div class="payout__cycles-sponsored">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h2 class="payout__cycles-sponsored--heading mb-4">Farm Cycles Sponsored</h2>
                                    <div class="payout__cycles-sponsored--table-box">
                                        <table class="table table-bordered">
                                            <thead class="payout__thead">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Cycle Image</th>
                                                    <th scope="col">Farming Cycle</th>
                                                    <th scope="col">Number Of Units</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Return</th>
                                                    <th scope="col">Retain</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cyclesSponsored as $key => $cycleSponsored)
                                                <tr>
                                                    <th scope="row">
                                                        {{$key + 1}}
                                                    </th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                            <img src="{{asset($cycleSponsored->farmingcycle->avatar)}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">{{$cycleSponsored->farmingcycle->name}}</a>
                                                    </td>
                                                    <td>
                                                        {{$cycleSponsored->units}}
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            {{$cycleSponsored->farmingcycle->status->name}}
                                                        </a>
                                                    </td>
                                                    <td>
                                                            {{$cycleSponsored->transaction->returns}}
                                                    </td>
                                                    <td>
                                                        @if(!$cycleSponsored->hasRetained() && $cycleSponsored->farmingcycle->isPaidOut())
                                                            <a href="{{route('retain.sponsorship', $cycleSponsored->id)}}" class="btn btn-success btn-lg px-5">Retain</a>
                                                        @elseif($cycleSponsored->hasRetained())
                                                            <a class="btn btn-success btn-lg px-5 disabled">Retained</a>
                                                        @else
                                                            <a class="btn btn-secondary btn-lg px-5 disabled">Not Available</a>
                                                        @endif
                                                    </td>
                                                </tr>

                                                <div class="payout__popup">
                                                    <div class="modal fade" id="payout-details" tabindex="-1" role="dialog" aria-labelledby="payout-detailsTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog payout__modal-box modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header modalPadding-x">
                                                                    <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">farm cycle payout
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">X</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body modalPadding-x">
                                                                    <div class="payout__details">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-12 text-center">
                                                                                <div class="payout__image-box">
                                                                                    <img src="{{asset($cycleSponsored->farmingcycle->avatar)}}" alt="photo of farm cycle" class="payout__image">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <h1 class="payout__heading mb-5">
                                                                                            Payout Information
                                                                                        </h1>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-12">
                                                                                        <div class="payout__info payout__btnrmation">
                                                                                            <h2 class="payout__cycle-title mb-4">{{$cycleSponsored->farmingcycle->name}}</h2>
                                                                                            <p class="payout__sponsored mb-4">
                                                                                                Amount sponsored: <span class="payout__sponsored--span">{{$cycleSponsored->amount}}</span>
                                                                                            </p>
                                                                                            <p class="payout__date mb-4">
                                                                                                Payout date: <span class="payout__date--span">{{$cycleSponsored->farmingcycle->due_date->diffForHumans()}}</span>
                                                                                            </p>
                                                                                            <p class="payout__interest mb-4">Payout returns: <span
                                                                                                    class="payout__date--span">15%</span></p>

                                                                                            <div class="form-group">
                                                                                                <p class="payout__note">
                                                                                                    <strong>Withdrawals will become available from payout date.</strong>
                                                                                                </p>
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
                                                    </div>
                                                </div>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="payout__ruler mt-4">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
