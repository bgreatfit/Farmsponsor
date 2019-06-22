@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="add-cycle__content my-4 py-5">
                    <h1 class="add-cycle__heading text-center mb-5">Edit Farming Cycle</h1>
                    <form action="#" class="add-cycle__form">
                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label mr-auto">Select farm cycle photo:</label>
                            <input type="file" id="cycle-photo" name="cyclePhoto" class="add-cycle__input {{ $errors->has('cyclePhoto') ? ' is-invalid' : '' }}" >

                            @if ($errors->has('cyclePhoto'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cyclePhoto') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label">Farm cycle title:</label>
                            <input type="text" id="cycle-title" name="name" class="add-cycle__input form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle title" value="{{$farm->name}}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Cycle start date:</label>
                                    <input type="datetime" id="start-date" name="startDate" class="add-cycle__input form-control {{ $errors->has('startDate') ? ' is-invalid' : '' }}" placeholder="Enter cycle start date" value="{{$farm->start_date}}">
                                    @if ($errors->has('startDate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('startDate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Cycle due date:</label>
                                    <input type="datetime" id="due-date" name="dueDate" class="add-cycle__input form-control {{ $errors->has('dueDate') ? ' is-invalid' : '' }}" placeholder="Enter cycle due date" value="{{$farm->due_date}}">
                                    @if ($errors->has('dueDate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dueDate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control btn-lg add-cycle__btn">Save changes</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
