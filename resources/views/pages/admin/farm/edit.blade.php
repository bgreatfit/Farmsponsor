@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="add-cycle__content my-4 py-5">
                    <h1 class="add-cycle__heading text-center mb-5">Update {{$farm->name}}'s Cycle</h1>
                    <form action="{{route('farms.update', $farm->id)}}" method="POST" class="add-cycle__form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label mr-auto">Select farm cycle photo:</label>
                            <input type="file" id="cycle-photo" name="avatar" class="add-cycle__input {{ $errors->has('avatar') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('avatar') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label">Farm cycle title:</label>
                            <input type="text" id="cycle-title" name="name" class="add-cycle__input form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name') ?? $farm->name}}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="window-open" class="add-cycle__input--label">Sponsoring Window Open:</label>
                                    <input type="date" id="window-open" name="start_date" class="add-cycle__input form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" value="{{old('start_date') ?? $farm->edit_start_date}}">
                                    @if ($errors->has('start_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('start_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Sponsoring Window Close:</label>
                                    <input type="date" id="window-close" name="due_date" class="add-cycle__input form-control {{ $errors->has('due_date') ? ' is-invalid' : '' }}" value="{{old('start_date') ?? $farm->edit_due_date}}">
                                    @if ($errors->has('due_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('due_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Farming Cycle Start Date:</label>
                                    <input type="date" id="start-date" name="cycle_start_date" class="add-cycle__input form-control {{ $errors->has('cycle_start_date') ? ' is-invalid' : '' }}" value="{{old('cycle_start_date') ?? $farm->edit_cycle_start_date}}">
                                    @if ($errors->has('cycle_start_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cycle_start_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Farming Cycle End Date:</label>
                                    <input type="date" id="due-date" name="cycle_end_date" class="add-cycle__input form-control {{ $errors->has('cycle_end_date') ? ' is-invalid' : '' }}" value="{{old('cycle_end_date') ?? $farm->edit_cycle_end_date}}">
                                    @if ($errors->has('cycle_end_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cycle_end_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="payout-date" class="add-cycle__input--label">Payout Date:</label>
                                    <input type="date" id="payout-date" name="payout_date" class="add-cycle__input form-control {{ $errors->has('payout_date') ? ' is-invalid' : '' }}" value="{{old('payout_date') ?? $farm->edit_payout_date}}">
                                    @if ($errors->has('payout_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('payout_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-units" class="add-cycle__input--label">Number of units:</label>
                            <input type="number" id="cycle-units" name="units" class="add-cycle__input form-control {{ $errors->has('units') ? ' is-invalid' : '' }}" value="{{old('units') ?? $farm->units}}">
                            @if ($errors->has('units'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('units') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-returns" class="add-cycle__input--label">Returns:</label>
                            <input type="number" id="cycle-returns" name="returns" class="add-cycle__input form-control {{ $errors->has('returns') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle returns" value="{{old('returns') ?? $farm->returns}}">
                            @if ($errors->has('returns'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('returns') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control btn-lg add-cycle__btn">Update Farm Cycle</button>
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
