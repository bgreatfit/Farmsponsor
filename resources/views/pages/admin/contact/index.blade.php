@extends('layouts.admin')

@section('content')
    <div class="deposit-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="deposit-request__heading-box">
                        <h1 class="deposit-request__heading mb-5 text-center">Contact Messages</h1>
                    </div>

                    <div class="deposit-request__table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Support ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Time Submitted</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($contacts as $contact)
                                    <tr>
                                        <td>
                                            <p class="depositor-info"> {{$contact->support_id}}</p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> {{$contact->name}}</p>
                                        </td>

                                        <td>
                                            <p class="depositor-info"> {{$contact->email}} </p>
                                        </td>

                                        <td>
                                            <p class="depositor-info"> {{$contact->subject}}</p>
                                        </td>

                                        <td>
                                            <p class="depositor-info"> {{$contact->created_at->diffForHumans()}}</p>
                                        </td>


                                        <td>
                                            <p class="depositor-info"> {{$contact->isResolved() ? 'Resolved' : 'Not Resolved'}}</p>
                                        </td>


                                        <td class="text-center">
                                            <a href="{{route('admin.contact.show', $contact->support_id)}}" class="btn btn-success">View</a>
                                        </td>

                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
