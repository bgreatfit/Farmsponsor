@extends('layouts.admin')

@section('content')
    <div class="deposit-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="deposit-request__heading-box">
                        <h1 class="deposit-request__heading mb-5 text-center">List Of Users</h1>
                        <div class="row">
                            <div class="col-12">
                                @include('includes.usersSearch')
                            </div>
                        </div>
                    </div>

                    <div class="deposit-request__table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Bank Name</th>
                                    <th scope="col">Account Name</th>
                                    <th scope="col">Account Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($users as $user)
                                    <tr>
                                        <th scope="row"> </th>
                                        <td>
                                            <p class="depositor-info"> {{$user->firstname}}</p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> {{$user->lastname}}</p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> {{$user->email}} </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> {{$user->phone}}</p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> {{$user->bank->name}}</p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> {{$user->bank->account_name}}</p>
                                        </td>

                                        <td>
                                            <p class="depositor-info"> {{$user->bank->account_number}}</p>
                                        </td>

                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
