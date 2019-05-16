@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="add-cycle__content my-4 py-5">
                    <h1 class="add-cycle__heading text-center mb-5">Edit Farming Cycle</h1>          
                    <form action="" class="add-cycle__form">
                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label mr-auto">Select farm cycle photo:</label>
                            <input type="file" id="cycle-photo" name="cyclePhoto" class="add-cycle__input {{ $errors->has('cyclePhoto') ? ' is-invalid' : '' }}">
                           
                            @if ($errors->has('cyclePhoto'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cyclePhoto') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-title" class="add-cycle__input--label">Farm cycle title:</label>
                            <input type="text" id="cycle-title" name="title" class="add-cycle__input form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle title">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="cycle-title" class="add-cycle__input--label">Cycle start date:</label>
                                    <input type="text" id="start-date" name="startDate" class="add-cycle__input form-control {{ $errors->has('startDate') ? ' is-invalid' : '' }}" placeholder="Enter cycle start date">
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
                                    <input type="text" id="due-date" name="dueDate" class="add-cycle__input form-control {{ $errors->has('dueDate') ? ' is-invalid' : '' }}" placeholder="Enter cycle due date">
                                    @if ($errors->has('dueDate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dueDate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-units" class="add-cycle__input--label">Number of units:</label>
                            <input type="number" id="cycle-units" name="cycleUnits" class="add-cycle__input form-control {{ $errors->has('cycleUnits') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle units">
                            @if ($errors->has('cycleUnits'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cycleUnits') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="cycle-returns" class="add-cycle__input--label">Returns:</label>
                            <input type="text" id="cycle-returns" name="cycleReturns" class="add-cycle__input form-control {{ $errors->has('cycleReturns') ? ' is-invalid' : '' }}" placeholder="Enter farm cycle returns">
                            @if ($errors->has('cycleReturns'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cycleReturns') }}</strong>
                                </span>
                            @endif
                        </div>
                           
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control btn-lg add-cycle__btn">Save changes</button>
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