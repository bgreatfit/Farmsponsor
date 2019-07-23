@extends('layouts.admin')

@section('content')
    <div class="deposit-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="deposit-request__heading-box">
                        <h1 class="deposit-request__heading mb-5 text-center">Deposits</h1>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p>Search by Transaction ID</p>
                                @include('includes.searchbar-deposit-transc-id')
                            </div>
                            <div class="col-12 col-md-6">
                                <p>Search by Name</p>

                                @include('includes.searchbar-deposit-name')
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item sponsor-via-vestbank-tab">
                            <a class="nav-link active sponsor-via-vestbank-link" id="home-tab" data-toggle="tab" href="#pending-deposit-vestbank" role="tab" aria-controls="home" aria-selected="true">Pending Deposits Vestbanking</a>
                        </li>
                        <li class="nav-item sponsor-via-vestbank-tab">
                            <a class="nav-link sponsor-via-vestbank-link" id="profile-tab" data-toggle="tab" href="#confirmed-deposit-vestbank" role="tab" aria-controls="profile" aria-selected="false">Confirmed Deposits Vestbanking</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pending-deposit-vestbank" role="tabpanel" aria-labelledby="home-tab">
                            <div class="deposit-request__table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Deposit Status</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($unapproved_deposits as $deposit)
                                            <tr>
                                                <th scope="row">{{ (($unapproved_deposits->currentPage() - 1 ) * $unapproved_deposits->perPage() ) + $loop->iteration }}</th>
                                                <td> 
                                                    <p class="depositor-info"> {{$deposit->transaction->transaction_id ?? ''}}</p>
                                                </td>
                                                
                                                <td>
                                                    <p class="depositor-info">{{$deposit->firstname}}</p>
                                                </td>

                                                <td>
                                                    <p class="depositor-info">{{$deposit->lastname}}</p>
                                                </td>
                                                <td>
                                                    <p class="depositor-info">{{$deposit->email}}</p>
                                                </td>
                                                <td>
                                                    <p class="depositor-info">{{$deposit->address}}</p>
                                                </td>
                                                <td>
                                                    <p class="depositor-info">{{$deposit->amount}}</p>
                                                </td>
                                                <td>
                                                    <p class="depositor-info">{{$deposit->created_at}} </p>
                                                </td>

                                                <td>
                                                    <a href="{{route('admin.confirmfunding', $deposit->id)}}" class="btn form-control btn-lg btn-secondary depositor-status__btn">Confirm</a>
                                                </td>

                                                <td>
                                                    <a href="{{route('admin.deletefunding', $deposit->id)}}" class="btn form-control btn-lg btn-danger depositor-status__btn">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{
                                    $unapproved_deposits->links()
                                }}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="confirmed-deposit-vestbank" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="deposit-confirmed__table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Undo</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($approved_deposits as $deposit)
                                        <tr>
                                            <th scope="row">{{ (($approved_deposits->currentPage() - 1 ) * $approved_deposits->perPage() ) + $loop->iteration }}</th>
                                            <td>
                                                <p class="depositor-info"> {{$deposit->transaction->transaction_id ?? ''}}</p>

                                            </td>
                                            <td>
                                                <p class="depositor-info">{{$deposit->firstname}}</p>
                                            </td>
                                            <td>
                                                <p class="depositor-info">{{$deposit->lastname}}</p>
                                            </td>
                                            <td>
                                                <p class="depositor-info">{{$deposit->email}}</p>
                                            </td>
                                            <td>
                                                <p class="depositor-info">{{$deposit->address}}</p>
                                            </td>
                                            <td>
                                                <p class="depositor-info">{{$deposit->amount}}</p>
                                            </td>
                                            <td>
                                                <p class="depositor-info"> {{$deposit->created_at}} </p>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.reversefunding', $deposit->id)}}" class="btn form-control btn-lg btn-secondary depositor-status__btn">Reverse</a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.deletefunding', $deposit->id)}}" class="btn form-control btn-lg btn-danger depositor-status__btn">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{
                                    $approved_deposits->links()
                                }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
