@extends('layouts.admin')

@section('content')
    <div class="withdrawal-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="withdrawal-request__heading-box">
                        <h1 class="withdrawal-request__heading mb-5 text-center">Withdrawals</h1>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pending-withdrawal" role="tab" aria-controls="home" aria-selected="true">Pending Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#confirmed-withdrawal" role="tab" aria-controls="profile" aria-selected="false">Processed Withdrawals</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pending-withdrawal" role="tabpanel" aria-labelledby="home-tab">
                                <div class="withdrawal-request__table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Withdrawal Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($withdrawals as $key => $withdrawal)
                                                <tr>
                                                    <th scope="row">{{$key + 1}}</th>
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->user->firstname}}</p>
                                                    </td>
            
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->user->lastname}}</p>
                                                    </td>
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->user->email}}</p>
                                                    </td>
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->displayamount}}</p>
                                                    <td>
                                                        <a href="{{route('admin.confirmwithdrawal', $withdrawal->id)}}" class="btn form-control btn-lg btn-secondary widthdrawal-status__btn">Pending</a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn form-control btn-lg btn-danger depositor-status__btn">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="confirmed-withdrawal" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="withdrawal-confirmed__table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Withdrawal Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($withdrawals as $key => $withdrawal)
                                                <tr>
                                                    <th scope="row">{{$key + 1}}</th>
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->user->firstname}}</p>
                                                    </td>
            
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->user->lastname}}</p>
                                                    </td>
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->user->email}}</p>
                                                    </td>
                                                    <td>
                                                        <p class="widthdrawal-info">{{$withdrawal->displayamount}}</p>
                                                    <td>
                                                        <a href="{{route('admin.confirmwithdrawal', $withdrawal->id)}}" class="btn form-control btn-lg btn-secondary widthdrawal-status__btn">Pending</a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn form-control btn-lg btn-danger depositor-status__btn">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
