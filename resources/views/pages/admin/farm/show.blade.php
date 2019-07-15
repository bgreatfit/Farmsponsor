@extends('layouts.admin')

@section('content')
<div class="sponsors-list-wrap my-5 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="sponsors-list__content ">
                    <h1 class="sponsors-list__heading text-center mb-5">{{$farm->name}}'s Farming Cycle Details</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="sponsors-list__content ">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item sponsor-via-vestbank-tab">
                            <a class="nav-link active sponsor-via-vestbank-link" id="home-tab" data-toggle="tab" href="#pending-sponsorship-via-vestbank" role="tab" aria-controls="home" aria-selected="true">Pending Sponsorships Vestbanking</a>
                        </li>
                        <li class="nav-item sponsor-via-vestbank-tab">
                            <a class="nav-link sponsor-via-vestbank-link" id="profile-tab" data-toggle="tab" href="#confirmed-sponsorship-via-vestbank" role="tab" aria-controls="profile" aria-selected="false">Confirmed Sponsorships Vestbanking</a>
                        </li>
                        <li class="nav-item sponsor-now-tab">
                            <a class="nav-link sponsor-now-link" id="profile-tab" data-toggle="tab" href="#pending-sponsor-now" role="tab" aria-controls="profile" aria-selected="false">Pending Sponsor Now</a>
                        </li>
                        <li class="nav-item sponsor-now-tab">
                            <a class="nav-link sponsor-now-link" id="profile-tab" data-toggle="tab" href="#confirmed-sponsor-now" role="tab" aria-controls="profile" aria-selected="false">Confirmed Sponsor Now</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pending-sponsorship-via-vestbank" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Confirm Sponsor</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Amount Sponsored</th>
                                        <th scope="col">Units</th>
                                        <th scope="col">Returns (NGN)</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Remove</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($unapproved_vestbank_sponsors as $key => $sponsor)
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>
                                            <a href="{{route('sponsorship.confirm', $sponsor->id)}}" class="sponsor-confirm btn btn-md btn-warning">Confirm</a>
                                        </td>
                                        <td>{{$sponsor->user->firstname}}</td>
                                        <td>{{$sponsor->user->lastname}}</td>
                                        <td>{{$sponsor->transaction->amount}}</td>
                                        <td>{{$sponsor->units}}</td>
                                        <td>{{$sponsor->transaction->returns}}</td>
                                        <td>{{$sponsor->user->phone}}</td>
                                        <td>{{$sponsor->user->email}}</td>
                                        <td>
                                            <a href="{{route('sponsorship.delete', $sponsor->id)}}" class="sponsor-confirm btn btn-md btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="confirmed-sponsorship-via-vestbank" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Amount Sponsored</th>
                                        <th scope="col">Units</th>
                                        <th scope="col">Returns (NGN)</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Undo</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($approved_vestbank_sponsors as $key => $sponsor)
                                    <tr>
                                         <th scope="row">{{$key}}</th>
                                        <td>{{$sponsor->user->firstname}}</td>
                                        <td>{{$sponsor->user->lastname}}</td>
                                        <td>{{$sponsor->transaction->amount}}</td>
                                        <td>{{$sponsor->units}}</td>
                                        <td>{{$sponsor->transaction->returns}}</td>
                                        <td>{{$sponsor->user->phone}}</td>
                                        <td>{{$sponsor->user->email}}</td>
                                        <td>
                                            <a href="{{route('sponsorship.reverse', $sponsor->id)}}" class="sponsor-confirm btn btn-md btn-secondary">Reverse</a>
                                        </td>
                                        <td>
                                            <a href="{{route('sponsorship.delete', $sponsor->id)}}" class="sponsor-confirm btn btn-md btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="pending-sponsor-now" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Confirm Sponsorship</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Amount Sponsored</th>
                                        <th scope="col">Units</th>
                                        <th scope="col">Returns (NGN)</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($unapproved_sponsors as $key => $sponsor)
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>
                                            <a href="{{route('banksponsorship.confirm', $sponsor->id)}}" class="sponsor-confirm btn btn-md btn-warning">Confirm</a>
                                        </td>
                                        <td>{{$sponsor->user->firstname}}</td>
                                        <td>{{$sponsor->user->lastname}}</td>
                                        <td>{{$sponsor->transaction->amount}}</td>
                                        <td>{{$sponsor->units}}</td>
                                        <td>{{$sponsor->transaction->returns}}</td>
                                        <td>{{$sponsor->user->phone}}</td>
                                        <td>{{$sponsor->user->email}}</td>
                                        <td>
                                            <a href="#"  class="sponsor-confirm btn btn-md btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="confirmed-sponsor-now" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Amount Sponsored</th>
                                        <th scope="col">Units</th>
                                        <th scope="col">Returns (NGN)</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Undo</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($approved_sponsors as $key => $sponsor)
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$sponsor->user->firstname}}</td>
                                        <td>{{$sponsor->user->lastname}}</td>
                                        <td>{{$sponsor->transaction->amount}}</td>
                                        <td>{{$sponsor->units}}</td>
                                        <td>{{$sponsor->transaction->returns}}</td>
                                        <td>{{$sponsor->user->phone}}</td>
                                        <td>{{$sponsor->user->email}}</td>
                                        <td>
                                            <a href="{{route('banksponsorship.reverse', $sponsor->id)}}"  class="sponsor-confirm btn btn-md btn-secondary">Reverse</a>
                                        </td>
                                        <td>
                                            <a href="#"  class="sponsor-confirm btn btn-md btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{$unapproved_vestbank_sponsors->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
