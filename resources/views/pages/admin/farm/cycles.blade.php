@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="farming-cycle__content my-4 py-5">

                <div class="farming-cycle__heading-box mt-5 ">
                    <h1 class="farming-cycle__heading text-center">Farming Cycles</h1>
                </div>
              <div class="farming-cycle__add text-center mb-4">
                <a href="{{route('farms.create')}}" class="farming-cycle__add--cta btn btn-lg btn-success mr-2" role="button">Add New farming cycle</a>
              </div>

              <div class="farming-cycle__details">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Farming Cycle</th>
                      <th scope="col">Start Units</th>
                      <th scope="col">Remaining Units</th>
                      <th scope="col">Window Duration</th>
                      <th scope="col">Payout Date</th>
                      <th scope="col">Payout Status</th>
                      <th scope="col">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($farms as $key => $farm)
                        <tr>
                            <th scope="row">{{ (($farms->currentPage() - 1 ) * $farms->perPage() ) + $loop->iteration }}</th>
                            <td>
                            <a href="{{route('admin.farmshow', $farm->id)}}" class="farming-cycle__info">{{$farm->name}}</a>
                            </td>
                            <td>{{$farm->start_unit}} </td>
                            <td>{{$farm->units}} </td>
                            <td>{{ $farm->start_date->format('d-M-Y')}} to {{ $farm->due_date->format('d-M-Y')}}</td>
                            <td>{{ $farm->payout_date->format('d-M-Y')}}</td>
{{--                            <td>--}}
{{--                                @if($farm->isSoldOut())--}}
{{--                                    <a href="{{route('farms.open',$farm->id)}}" class="btn btn-success btn-lg btn-secondary farming-cycle__info">Re-Open</a>--}}
{{--                                @else--}}
{{--                                    <a href="{{route('farms.soldout',$farm->id)}}" class="btn btn-lg btn-danger btn-secondary farming-cycle__info">Sell Out</a>--}}
{{--                                @endif--}}
{{--                            </td>--}}
                            <td>
                                @if($farm->isPaidOut())
                                    <a href="{{route('farms.stoppayout',$farm->id)}}" class="btn btn-danger btn-lg btn-secondary farming-cycle__info">Reject</a>
                                @else
                                    <a href="{{route('farms.payout',$farm->id)}}" class="btn btn-lg btn-success btn-secondary farming-cycle__info">Approve</a>
                                @endif

                            </td>
                            <td>
                            <a href="{{route('farms.edit', $farm->id)}}" class="farming-cycle__add--cta btn btn-lg btn-info mr-2" role="button">Edit</a>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
                <div class="row">
                    <div class="col-7 mx-auto">
                        {{$farms->links()}}
                    </div>
                </div>

              </div>


            </div>
        </div>
    </div>

</div>
@endsection
