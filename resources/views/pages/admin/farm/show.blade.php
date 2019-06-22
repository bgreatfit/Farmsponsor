@extends('layouts.admin')

@section('content')
<div class="sponsors-list-wrap my-5 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="sponsors-list__content ">
                    <h1 class="sponsors-list__heading text-center mb-5">{{$farm->name}} Farming Cycle</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="sponsors-list__content ">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Confirm</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Amount Sponsored</th>
                            <th scope="col">Units</th>
                            <th scope="col">Returns (NGN)</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($unapproved_sponsors as $sponsor)
                            <tr>
                                <th scope="row">1</th>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$unapproved_sponsors->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
