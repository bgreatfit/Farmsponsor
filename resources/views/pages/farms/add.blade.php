@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="add-cycle__content my-4 py-5">
                    <h1 class="add-cycle__heading text-center mb-5">Create A New Farming Cycle</h1>
                    <form action="{{route('farms.store')}}" method="POST" class="add-cycle__form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label mr-auto">Select farm cycle photo:</label>
                            <input type="file" id="cycle-photo" name="avatar" class="add-cycle__input {{ $errors->has('avatar') ? ' is-invalid' : '' }}">
                            @if ($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('avatar') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label">Farm cycle title:</label>
                            <input type="text" id="cycle-title" name="name" class="add-cycle__input form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle title">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Cycle start date:</label>
                                    <input type="datetime-local" id="start-date" name="start_date" class="add-cycle__input form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" placeholder="Enter cycle start date">
                                    @if ($errors->has('start_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('start_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Cycle due date:</label>
                                    <input type="datetime-local" id="due-date" name="due_date" class="add-cycle__input form-control {{ $errors->has('due_date') ? ' is-invalid' : '' }}" placeholder="Enter cycle due date">
                                    @if ($errors->has('due_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('due_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-units" class="add-cycle__input--label">Number of units:</label>
                            <input type="number" id="cycle-units" name="units" class="add-cycle__input form-control {{ $errors->has('units') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle units">
                            @if ($errors->has('units'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('units') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-returns" class="add-cycle__input--label">Returns:</label>
                            <input type="number" id="cycle-returns" name="returns" class="add-cycle__input form-control {{ $errors->has('returns') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle returns">
                            @if ($errors->has('returns'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('returns') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control btn-lg add-cycle__btn">Add cycle</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <a href="{{asset('/admin/farmingcycle')}}" class="btn btn-secondary form-control btn-lg add-cycle__btn">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
